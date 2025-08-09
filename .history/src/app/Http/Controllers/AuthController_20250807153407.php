<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;
use App\Http\Requests\AuthRequest;
use Laravel\Fortify\Contracts\RequestPasswordResetLinkViewResponse;
use App\Http\Requests\AuthController

class AuthController extends Controller
{
    //データ一覧ページの表示
    public function index()
    {
        $members = Member::all();
        return view('index', ['members' => $members]);
    }
    //データ追加ページの表示
    public function register()
    {
        return view('register');
    }
    //追加機能
    public function create(AuthRequest $request)
    {
        $form = $request->all();
        Member::create($form);
        return redirect('/');
    }
    //データ編集ページの表示
    public function edit(Request $request)
    {
        $member = Member::find($request->id);
        return view('edit', ['form' => $member]);
    }
    //更新機能
    public function update(Request $request)
    {
        $form = $request->all();
        unset($form['_token']);
        Member::find($request->id)->update($form);
        return redirect('/');
    }
    //データ削除用ページの表示
    public function delete(Request $request)
    {
        $member =  Member::find($request->id);
        return view('delete', ['member' => $member]);
    }
    //削除機能
    public function remove(Request $request)
    {
        Member::find($request->id)->delete();
        return redirect('/');
    }

    public 
}
