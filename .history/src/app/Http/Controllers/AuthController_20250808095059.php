<?php

namespace App\Http\Controllers;

use App\Models\Member;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // データ追加用ページの表示
    public function register()
    {
        return view('register');
    }
    // データ追加機能
    public function create(Request $request){
        $form = $request->all();
        return redirect('/');
    }
    // データ一覧ページの表示
    public function index()
    {
        $authors = Member::all();
        return view('index', ['authors' => $authors]);
    }}
