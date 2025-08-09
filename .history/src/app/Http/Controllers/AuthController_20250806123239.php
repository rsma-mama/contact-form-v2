<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mi;
use App\Http\Requests\AuthRequest;
class AuthController extends Controller
{
    //
    public function index()
    {
        $auths = Auth::all();
        return view('index');
    }
}
