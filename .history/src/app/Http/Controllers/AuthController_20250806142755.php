<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Http\Requests\AuthRequest;
use Laravel\Fortify\Contracts\RequestPasswordResetLinkViewResponse;

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
        $member = Member::find($request->id);
        return view('edit', ['form' => $member]);
    }

    public function update(Request $request){
        $form = $request->all();
        unset($form['_token']);
        Member::find($request->id)->update($form);
        return redirect('/');
    }
    //データ削除用ページの表示
    public function delete(Request $request){
        $member =  Member::find($request->id);
        return view('delete',[me])
    }


}
