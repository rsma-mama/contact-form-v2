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
      <a class="header__" href="">login</a>
      </a>
      <nav>
        <ul class="header__nav">
          @if(Auth::check())
          <li class="header__nav-item">
            <a class="header__nav-item__link" href="login">Register</a>
          </li>
          @endif
        </ul>
      </nav>
    </div>
    </h1>
  </header>
</body>

</html>

<main>

  @yield('content')
</main>

</html>