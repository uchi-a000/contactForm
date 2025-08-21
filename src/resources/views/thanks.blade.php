@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks-page">
        <p class="thanks-page__message">お問い合わせありがとうございました</p>
        <form action="/" method="get">
            <button class="thanks-page__btn">HOMEへ戻る</button>
        </form>
    <div class="thanks-page-bg">
        <span class="thanks-page-bg__text">Thank you</span>
    </div>
</div>

@endsection