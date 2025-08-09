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
        return view('index', ['members' => $members]);
    }

    public function add()
    {
        return view('add');
    }

    public function create(AuthRequest $request)
    {
        $form = $request->all();
        Member::create($form);
        return redirect('/');
    }

    public function edit(Request $request){
        $member::Member::find($request->id);
        return bi
    }
}
