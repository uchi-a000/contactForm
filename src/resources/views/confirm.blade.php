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
        <h2>内容確認</h2>
    </div>
    <form class="form" action="/thanks" method="post">
        @csrf
        <div class="confirm-table">
            <table class="confirm-table__inner">
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お名前</th>
                    <td class="confirm-table__text">{{ $contacts['first_name'] }}&nbsp;{{ $contacts['last_name'] }} </td>
                    <input type="hidden" name="first_name" value="{{ old('first_name', $contacts['first_name']) }}" readonly />
                    <input type="hidden" name="last_name" value=" {{ old('last_name', $contacts['last_name']) }} " readonly />

                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">性別</th>
                    <td class="confirm-form__data">
                        @if($contacts['gender'] == 1)
                        男性
                        @elseif($contacts['gender'] == 2)
                        女性
                        @else
                        その他
                        @endif
                    </td>
                    <input type="hidden" name="gender" value="{{ $contacts['gender'] }}" readonly />

                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">メールアドレス</th>
                    <td class="confirm-table__text">{{ $contacts['email'] }}</td>
                    <input type="hidden" name="email" value="{{ $contacts['email'] }}" readonly />
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__label">電話番号</th>
                    <td class="confirm-form__data">{{ $contacts['tel_1'] }}{{ $contacts['tel_2'] }}{{ $contacts['tel_3'] }}</td>
                    <input type="hidden" name="tel_1" value="{{ $contacts['tel_1'] }}">
                    <input type="hidden" name="tel_2" value="{{ $contacts['tel_2'] }}">
                    <input type="hidden" name="tel_3" value="{{ $contacts['tel_3'] }}">
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">住所</th>
                    <td class="confirm-table__text">{{ $contacts['address'] }}</td>
                    <input type="hidden" name="address" value="{{ $contacts['address'] }}" readonly />
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">建物名</th>
                    <td class="confirm-table__text">{{ $contacts['building'] }}</td>
                    <input type="hidden" name="building" value="{{ $contacts['building'] }}" readonly />
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容の種類</th>
                    <td class="confirm-table__text">{{ $category->category }}</td>
                    <input type="hidden" name="category_id" value="{{ $contacts['category_id'] }}" />
                </tr>
                <tr class="confirm-table__row">
                    <th class="confirm-table__header">お問い合わせ内容</th>
                    <td class="confirm-table__text">{{ $contacts['detail'] }}</td>
                    <input type="hidden" name="detail" value="{{ $contacts['detail'] }}" readonly />
                </tr>
            </table>
        </div>
        <div class="form__button">
            <input class="send__btn" type="submit" value="送信" name="send">
            <input class="back__btn" type="submit" value="修正" name="back">
        </div>
    </form>

</div>
@endsection