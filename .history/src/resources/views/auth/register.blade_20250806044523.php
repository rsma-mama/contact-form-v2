@extends('layouts.app')

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