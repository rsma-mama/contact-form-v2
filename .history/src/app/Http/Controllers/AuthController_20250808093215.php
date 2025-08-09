<?php

namespace App\Http\Controllers;
use App\Models\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // 登録フォームの表示
    public function register()
    {
        return view('reg');
    }

    // 登録処理（例）
    public function create(Request $request)
    {
        // バリデーションや登録処理を書く場所
        // ここでは簡単にリダイレクトだけ書きます

        return redirect('/');
    }
}
