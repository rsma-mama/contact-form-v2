<?php

namespace App\Http\Controllers;

use App\Models\Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    // データ追加用ページの表示
    public function register()
    {
        return view('register');
    }

    public function create(Request $request){
        $form = $request->all();
        return redirect('/');
    }

    public function index()
    {
        $authors = Author::all();
        return view('index', ['authors' => $authors]);
    }}