@extends('app')
<!-- ベースで使用するbladeデータを指定している -->

@section('title', '記事一覧')
<!-- app.blade.phpの@yield('title')に対応 -->

@section('content')
<!-- app.blade.phpの @yield('content') に対応-->
@include('nav')
<div class="container">
  @foreach($articles as $article)

    @include('articles.card')

  @endforeach
</div>
@endsection
