@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('content')
<div class="register-form__content">
  <div class="register-form__heading">
    <h2>Register</h2>
  </div>
  <form class="form">
    <div class="form__group">
      <div cass="form__group__title">
        <


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