<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illminate\Suport\Facadede\Route;
use App\Http\Controllers\Conta

class ContactController extends Controller
{
    //
    public function index()
    {
        return view('contact.index');
    }
}
