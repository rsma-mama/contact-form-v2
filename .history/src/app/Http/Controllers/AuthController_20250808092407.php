エラー例外
未定義の変数 $content (ビュー: /var/www/resources/views/auth/register.blade.php)
http://localhost/register
ソリューションを非表示
$contentは未定義です
{{ $content }}ブレードテンプレートで変数をオプションにします。{{ $content ?? '' }}



変数をオプションにする
スタックトレース
リクエスト
アプリ
ユーザー
コンテクスト
デバッグ
共有 


ベンダーフレームを拡張
56
リソース/ビュー/認証/レジスタ.blade.php
Illuminate\ Foundation\ Bootstrap\ HandleExceptions
: 17
55
: 17

16 個のベンダー フレーム…
38
app/ Http/ミドルウェア/認証.php
アプリ\ HTTP\ミドルウェア\認証
: 29

36 ベンダー フレーム…
1
パブリック/インデックス.php
: 52
Illuminate\ Foundation\ Bootstrap\ HandleExceptions ::handleError
リソース/ビュー/認証/レジスタ.blade.php :17
































@セクション(' css ')

< link  rel ="スタイルシート" href =" {{ asset( 'css/auth.css' ) }} ">

@endsection


@section('title', 'register.blade.php')


@セクション('コンテンツ')


{{--ul>

@foreach( $errors ->all() を$errorとして)

<li>{{ $エラー} } </li>

@endforeach

</ul>--}}


<h1>{ {$content} } </h1>

<フォームアクション=" /middleware " メソッド=" POST ">

  @csrf

  <input type=" text " name=" content ">

  <input type="送信">

</フォーム>

<!--エラ
