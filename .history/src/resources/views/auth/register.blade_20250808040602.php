@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/auth.css') }}">
@endsection

@section('title', 'register.blade.php')

@section('content')

{{--ul>
@foreach($errors->all() as $error)
<li>{{ $error }}</li>
@endforeach
</>--}}


<!--エラーメッセージここまでしかやっていない-->
<div class="register-form__content">
  <div class="register-form__heading">
    <h2>Register</h2>
  </div>

  <form class="form" action='/register' method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <div class="form__group-content">
          <div class="form__input--text">
            <input type="text" name="name" placeholder="例:山田 太郎" value="{{ old('name') }}" />
            @error ('name')
            <div class="error-message">{{ $message }}
            </div>
            @enderror
          </div>
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
        </div>
        <div class="form__error">
        @error('email')
          <div class="error-message">{{ $message }}
          </div>
          @enderror
        </div>
      </div>
    </div>

    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">パスワード</span>
      </div>
      <div class="form__group-content">
      <div class="form__input--text">
        <input type="password" name="password" placeholder='例:coachtechno6' />
      </div>
      <div class="form__error">
      @error('password')
        <div class="error-message">{{ $message }}
        </div>
        @enderror
      </div>
    </div>
  </div>

  <div class="form__button">
    <button class="form__button-submit" type="submit">登録</button>
  </div>
</form>
</div>
@endsection