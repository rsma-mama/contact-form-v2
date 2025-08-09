<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Auth;
use App\Http\Requests\Autho
class AuthController extends Controller
{
    //
    public function index()
    {
        return view('index');
    }
}
