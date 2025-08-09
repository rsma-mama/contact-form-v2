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
      <div class="form__group__title">
        <span class="form__group--item">お名前</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="name" valuez="{{ old('name') }}"/>
        </div>
        <div class="form__error">
          @error('name')
          {{ $message }}
          @enderror
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