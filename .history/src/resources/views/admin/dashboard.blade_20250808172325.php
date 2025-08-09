{{-- resources/views/dashboard.blade.php --}}
@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/contact.css') }}">
@endsection

@section('content')
<h1>お問い合わせフォーム</h1>
  <!-- フォーム内容  -->
</form>
<form method="GET" action="{{ route('members.index') }}">
  <input type="text" name="name" value="{{ request('name') }}" placeholder="名前">
  <select name="name_match">
    <option value="partial" @if(request('name_match')=='partial') selected @endif>部分一致</option>
    <option value="exact" @if(request('name_match')=='exact') selected @endif>完全一致</option>
  </select>

  <input type="text" name="email" value="{{ request('email') }}" placeholder="メールアドレス">
  <select name="email_match">
    <option value="partial" @if(request('email_match')=='partial') selected @endif>部分一致</option>
    <option value="exact" @if(request('email_match')=='exact') selected @endif>完全一致</option>
  </select>

  <select name="gender">
    <option value="all" @if(request('gender')=='all' || !request('gender')) selected @endif>性別</option>
    <option value="male" @if(request('gender')=='male') selected @endif>男性</option>
    <option value="female" @if(request('gender')=='female') selected @endif>女性</option>
    <option value="other" @if(request('gender')=='other') selected @endif>その他</option>
  </select>

  <input type="text" name="inquiry_type" value="{{ request('inquiry_type') }}" placeholder="お問い合わせ種類">
  <select name="inquiry_type_match">
    <option value="partial" @if(request('inquiry_type_match')=='partial') selected @endif>部分一致</option>
    <option value="exact" @if(request('inquiry_type_match')=='exact') selected @endif>完全一致</option>
  </select>

  <input type="date" name="inquiry_date" value="{{ request('inquiry_date') }}">

  <button type="submit">検索</button>
  <a href="{{ route('members.index') }}"><button type="button">リセット</button></a>
</form>

<table>
  <thead>
    <tr>
      <th>名前</th><th>メール</th><th>性別</th><th>お問い合わせ種類</th><th>日付</th><th>詳細</th>
    </tr>
  </thead>
  <tbody>
    @foreach($members as $member)
    <tr>
      <td>{{ $member->last_name }} {{ $member->first_name }}</td>
      <td>{{ $member->email }}</td>
      <td>{{ ucfirst($member->gender) }}</td>
      <td>{{ $member->inquiry_type }}</td>
      <td>{{ $member->inquiry_date }}</td>
      <td><a href="{{ route('members.show', $member->id) }}">詳細</a></td>
    </tr>
    @endforeach
  </tbody>
</table>

{{ $members->links() }}

<form method="GET" action="{{ route('members.export') }}">
  {{-- 検索条件をhiddenで送る --}}
  <input type="hidden" name="name" value="{{ request('name') }}">
  <input type="hidden" name="name_match" value="{{ request('name_match') }}">
  <input type="hidden" name="email" value="{{ request('email') }}">
  <input type="hidden" name="email_match" value="{{ request('email_match') }}">
  <input type="hidden" name="gender" value="{{ request('gender') }}">
  <input type="hidden" name="inquiry_type" value="{{ request('inquiry_type') }}">
  <input type="hidden" name="inquiry_type_match" value="{{ request('inquiry_type_match') }}">
  <input type="hidden" name="inquiry_date" value="{{ request('inquiry_date') }}">
  <button type="submit">エクスポート</button>
</form>
@endsection