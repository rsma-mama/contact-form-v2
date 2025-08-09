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
    }

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
        }
}
