<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Http\Requests\AuthRequest;
class AuthController extends Controller
{
    //
    public function index()
    {
        $members = ::all();
        return view('index');
    }
}
