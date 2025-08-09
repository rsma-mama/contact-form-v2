<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth;
use App\Http\Requests\AuthRequ
class AuthController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
}
