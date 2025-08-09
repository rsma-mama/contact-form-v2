<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AuthController extends Controller
{
    // データ追加用ページの表示
    public function register()
    {
        return view('auth.register');
    }
    // データ追加機能
    public function create(Request $request)
    {
        $form = $request->all();
        return redirect('/');
    }
    // データ一覧ページの表示
    public function index()
    {
        $authors = Member::all();
        return view('index', ['authors' => $authors]);
    }
    // データ編集ページの表示
    public function edit(Request $request)
    {
        $auth = Member::find($request->id);
        return view('edit', ['form' => $auth]);
    }
    // 更新機能
    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Member::find($request->id)->update($form);
        return redirect('/');

    public function index(Request $request)
{
    $query = Member::query();

    
    }
// 1. 名前検索（姓、名、フルネーム部分一致 or 完全一致
if ($request->filled('name')) {
            $name = $request->input('name');
            $matchType = $request->input('name_match', 'partial'); // partial or exact

            $query->where(function($q) use ($name, $matchType) {
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

        // 2. メールアドレス検索
        if ($request->filled('email')) {
            $email = $request->input('email');
            $matchType = $request->input('email_match', 'partial');
            if ($matchType === 'exact') {
                $query->where('email', $email);
            } else {
                $query->where('email', 'like', "%{$email}%");
            }
        }

        // 3. 性別検索
        if ($request->filled('gender') && $request->gender !== 'all') {
            $query->where('gender', $request->gender);
        }
        // 4. お問い合わせ種類検索
        if ($request->filled.('inquiry_type')) {
            $type = $request->input('inquiry_type');
            $matchType = $request->input('inquiry_type_match', 'partial');
            if ($matchType === 'exact') {
                $query->where('inquiry_type', $type);
            } else {
                $query->where('inquiry_type', 'like', "%{$type}%");
            }
        }

        // 5. 日付検索
        if ($request->filled('inquiry_date')) {
            $query->whereDate('inquiry_date', $request->inquiry_date);
        }

        // ページネーション 7件ずつ
        $members = $query->paginate(7)->withQueryString();

        return view('members.index', compact('members'));
    };
        public function show($id){
    
        $member = Member::findOrFail($id);
        return view('members.show', compact('member'));
    }


}
