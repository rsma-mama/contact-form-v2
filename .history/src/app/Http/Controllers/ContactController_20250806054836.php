<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controller

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact.index');
    }
}
