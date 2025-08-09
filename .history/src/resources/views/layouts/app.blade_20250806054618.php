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
    <div class="header__inner">
      <div class="header__utilities">
        <a class="header__logo" href="/">
          FashionablyLate
        </a>
        <nav>
          <ul class="header__nav">
            <li class="header__nav-item">
              <a class="header__nav-item__link" href="/">Register</a>
            </li>
          </ul>
        </nav>
      </div>
    </div>
  </header>
</body>

</html>

<main>

  @yield('content')
</main>
</body>

</html>