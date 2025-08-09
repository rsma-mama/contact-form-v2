<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AuthController extends Controller
{
    // ダッシュボード表示
    public function dashboard()
    {
        return view('dashboard.index', compact('members'));
    }

    // ログインページ
    public function login()
    {
        return view('auth.login');
    }

    // 新規登録ページ
    public function register()
    {
        return view('auth.register');
    }

    // データ追加
    public function create(Request $request)
    {
        $form = $request->all();
        // 保存処理などを追加
        return redirect('/');
    }

    // 編集ページ
    public function edit(Request $request)
    {
        $auth = Member::find($request->id);
        return view('edit', ['form' => $auth]);
    }

    // 更新
    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Member::find($request->id)->update($form);
        return redirect('/');
    }

    // 会員一覧表示（検索付き）
    public function index(Request $request)
    {
        $query = Member::query();

        // 検索条件
        if ($request->filled('name')) {
            $name = $request->input('name');
            $matchType = $request->input('name_match', 'partial');
            $query->where(function ($q) use ($name, $matchType) {
                if ($matchType === 'exact') {
                    $q->where('first_name', $name)
                        ->orWhere('last_name', $name)
                        ->orWhereRaw("CONCAT(last_name, ' ', first_name) = ?", [$name]);
                } else {
                    $q->where('first_name', 'like', "%{$name}%")
                        ->orWhere('last_name', 'like', "%{$name}%")
                        ->orWhereRaw("CONCAT(last_name, ' ', first_name) LIKE ?", ["%{$name}%"]);
                }
            });
        }

        if ($request->filled('email')) {
            $email = $request->input('email');
            $matchType = $request->input('email_match', 'partial');
            $matchType === 'exact'
                ? $query->where('email', $email)
                : $query->where('email', 'like', "%{$email}%");
        }

        if ($request->filled('gender') && $request->gender !== 'all') {
            $query->where('gender', $request->gender);
        }

        if ($request->filled('inquiry_type')) {
            $type = $request->input('inquiry_type');
            $matchType = $request->input('inquiry_type_match', 'partial');
            $matchType === 'exact'
                ? $query->where('inquiry_type', $type)
                : $query->where('inquiry_type', 'like', "%{$type}%");
        }

        if ($request->filled('inquiry_date')) {
            $query->whereDate('inquiry_date', $request->inquiry_date);
        }

        // ページネーション
        $members = $query->paginate(7)->withQueryString();

        return view('members.index', compact('members'));
    }

    // 詳細表示
    public function show($id)
    {
        $member = Member::findOrFail($id);
        return view('members.show', compact('member'));
    }

    // CSVエクスポート
    public function export(Request $request): StreamedResponse
    {
        $members = Member::all();

        $response = new StreamedResponse(function () use ($members) {
            $handle = fopen('php://output', 'w');
            fputcsv($handle, ['ID', '姓', '名', 'メール', '性別', 'お問い合わせ種類', '日付']);

            foreach ($members as $member) {
                fputcsv($handle, [
                    $member->id,
                    $member->last_name,
                    $member->first_name,
                    $member->email,
                    $member->gender,
                    $member->inquiry_type,
                    $member->inquiry_date,
                ]);
            }
            fclose($handle);
        });

        $filename = 'members_export_' . date('Ymd_His') . '.csv';
        $response->headers->set('Content-Type', 'text/csv');
        $response->headers->set('Content-Disposition', "attachment; filename={$filename}");

        return $response;
    }
}