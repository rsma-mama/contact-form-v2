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
        $members = Member::all();
        return view('index', ['members'=> $member]
    }
}
