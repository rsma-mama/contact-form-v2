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

    public function create(Request $request){
        $form = $request->all();
        return redirect('/');
    }
     
    public function index()
    {
        $authors = Member::all();
        return view('index', ['authors' => $authors]);
    }}
