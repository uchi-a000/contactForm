@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/admin.css') }}">
@endsection

@section('content')

@if (Auth::check())
<form class="form" action="/logout" method="post">
@csrf
    <button class="header-nav__button">ログアウト</button>
</form>
@endif

@endsection