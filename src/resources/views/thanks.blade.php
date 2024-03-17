@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/thanks.css') }}">
@endsection

@section('content')
<div class="thanks__content">
    <div class="thanks__heading">
        <h2>お問い合わせありがとうございます</h2>
        <div class="form__button">
            <button class="form__button-submit" type="submit">HOME</button>
        </div>
        <div class="back-text">Thank you</div>
    </div>
</div>
@endsection