@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<div class="register-form__content">
  <div class="register-form__i"



<form action="#" method="post">

  @csrf
  <h1>Register</h1>

  <section>
    <label>お名前</label>
    <input>
  </section>

  <section>
    <label>メールアドレス</label>
    <input>
  </section>

  <section>
    <label>パスワード</label>
    <input>
  </section>

  <button id="sign-up">登録</button>

</form>