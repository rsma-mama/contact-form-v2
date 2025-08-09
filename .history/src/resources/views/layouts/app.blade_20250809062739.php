<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset ('css/sanitize.css') }}">
  <link rel="stylesheet" href="{{ asset ('css/auth.css') }}">

  @yield('css')
</head>

<body>
  <header class="header">
    <h2 class="header__title">FashionablyLate</h2>
    <div class="header__utilities">
      <a class="header__button" href="login">login</a>
      <nav>
        <ul class="header__nav">
          {{--@if(Auth::check())--}}
        　@if(Route::currentRouteName() 　=== 'login')
            <li><a href="{{ route  ('register') }}" class="header__button">Register</a></li>
          @elseif(Route::currentRouteName() === 'register')
            <li><a href="{{ route('login') }}" class="header__button">Login</a></li>
          @else
            <li><a href="{{ route('login') }}" class="header__button">Login</a></li>
            <li><a href="{{ route('register') }}" class="header__button">Register</a></li>
          {{--<a class="header__button" href="{{ route('register') }}">Register</a>
          <li class="header__button">
            <a class="header__nav-item__link" href="{{ route('register') }}">Register</a>--}}
          </li>--}}
          @endif
        </ul>
      </nav>
    </div>
  </header>
</body>

</html>

<main>

  @yield('content')
</main>

</html>