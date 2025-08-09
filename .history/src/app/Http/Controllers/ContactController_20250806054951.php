<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illminate\Suport\Faca

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact.index');
    }
}
