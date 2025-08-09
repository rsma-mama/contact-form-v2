<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>FashionablyLate</title>
  <link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
  <link rel="stylesheet" href="{{ asset('css/auth.css') }}" />

  @yield('css')
</head>

<body>
  <header class="header">
    <h2 class="header__title">FashionablyLate</h2>
    <div class="header__utilities">
      <nav>
        <ul class="header__nav">
          @if(Route::currentRouteName() === 'login')
            <li><a href="{{ route('register') }}" class="header__button">Register</a></li>
          @elseif(Route::currentRouteName() === 'register')
            <li><a href="{{ route('login') }}" class="header__button">Login</a></li>
          @else
            <li><a href="{{ route('login') }}" class="header__button">Login</a></li>
            <li><a href="{{ route('register') }}" class="header__button">Register</a></li>
          @endif
        </ul>
        <ul class="pagination">
        <li><a href="#prev">&lt;</a></li>
        <li><a href="#page1" class="active">1</a></li>
        <li><a href="#page2">2</a></li>
        <li><a href="#page3">3</a></li>
        <li><a href="#page4">4</a></li>
        <li><a href="#page3">3</a></li>
        <li><a href="#next">&gt;</a></li>
      </ul>
      </nav>
    </div>
  </header>

  <main>
    @yield('content')
  </main>
</body>

</html>