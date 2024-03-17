@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/confirm.css') }}">
@endsection

@section('content')
<header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/">
            FashionablyLate
        </a>
    </div>
</header>
<div class="confirm__content">
    <div class="confirm__heading">
        <h2>Confirm</h2>
    </div>
    @foreach ($contacts as $contact)
    <form class="form" action="/thanks" method="post">
        @csrf
        <div class="confirm-table">

            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">
                        <input type="text" name="first_name" value="{{ $contact['first_name'] }}" readonly />
                        <input type="text" name="last_name" value="{{ $contact['last_name'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-table__text">
                        <input type="text" name="gender" value="{{ $contact['gender'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">
                        <input type="email" name="email" value="{{ $contact['email'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">電話番号</th>
                    <td class="confirm-table__text">
                        <input type="tel" name="tel1" value="{{ $contact['tel1'] }}" readonly />
                        <input type="tel" name="tel2" value="{{ $contact['tel2'] }}" readonly />
                        <input type="tel" name="tel3" value="{{ $contact['tel3'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">
                        <input type="text" name="address" value="{{ $contact['address'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">
                        <input type="text" name="building" value="{{ $contact['building'] }}" readonly />
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容の種類</th>
                    <td class="confirm-table__text">
                        @foreach ($categories as $category)
                        <input type="select" name="content" value="{{ $category['content'] }}" readonly />
                        <input type="hidden" name="id" value="{{ $category['id'] }}" />
                        @endforeach
                    </td>
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">
                        <input type="text" name="detail" value="{{ $contact['detail'] }}" readonly />
                    </td>
                </tr>
            </table>

        </div>
        @endforeach
        <div class="form__button">
            <button class="form__button-submit" type="submit">送信</button>
            <a class="back" name='back' href="/">修正</a>
        </div>
    </form>

</div>
@endsection