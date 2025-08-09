<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illminate\Supo

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact.index');
    }
}
