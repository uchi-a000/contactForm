@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=IBM+Plex+Serif&family=Indie+Flower&family=Single+Day&display=swap" rel="stylesheet">
@endsection

@section('content')

<header class="header">
    <div class="header__inner">
        <a class="header__logo" href="/">
            FashionablyLate
        </a>
    </div>
</header>
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>Contact</h2>
    </div>
    <form class="form" action="/confirm" method="post">
        @csrf
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お名前</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--name">
                    <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}" />
                    <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}" />
                </div>
                <div class="form__error">
                    @error('first_name')
                    {{ $message }}
                    @enderror
                    @error('last_name')
                    {{ $message }}
                    @enderror

                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">性別</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--gender">
                    <label><input type="radio" name="gender" value="男性" @if(1===(int)old('gender')) selected @endif />男性</label>
                    <label><input type="radio" name="gender" value="女性" @if(1===(int)old('gender')) selected @endif />女性</label>
                    <label><input type="radio" name="gender" value="その他" @if(1===(int)old('gender')) selected @endif />その他</label>
                </div>
                <div class="form__error">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">メールアドレス</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="email" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                </div>
                <div class="form__error">
                    @error('email')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">電話番号</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--tel">
                    <input type="tel" name="tel1" value="{{ old('tel1') }}" placeholder="080" /> -
                    <input type="tel" name="tel2" value="{{ old('tel2') }}" placeholder="1234" /> -
                    <input type="tel" name="tel3" value="{{ old('tel3') }}" placeholder="5678" />
                </div>
                <div class="form__error">
                    @error('tel1')
                    {{ $message }}
                    @enderror
                    @error('tel2')
                    {{ $message }}
                    @enderror
                    @error('tel3')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">住所</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1&#45;2&#45;3" value="{{ old('address') }}" />
                </div>
                <div class="form__error">
                    @error('address')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">建物名</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--text">
                    <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101" value="{{ old('building') }}" />
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容の種類</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--content">
                    <select class="content-box_item" name="content">
                        <option value="">選択してください</option>
                        <option name="content" value="1.商品のお届けについて" @if(1===(int)old('content')) selected @endif>1.商品のお届けについて</option>
                        <option name="content" value="2.商品の交換について" @if(2===(int)old('content')) selected @endif>2.商品の交換について</option>
                        <option name="content" value="3.商品トラブル" @if(3===(int)old('content')) selected @endif>3.商品トラブル</option>
                        <option name="content" value="4.ショップへのお問い合わせ" @if(4===(int)old('content')) selected @endif>4.ショップへのお問い合わせ</option>
                        <option name="content" value="5.その他" @if(4===(int)old('content')) selected @endif>5.その他</option>
                    </select>
                </div>
                <div class="form__error">
                    @error('content')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__group">
            <div class="form__group-title">
                <span class="form__label--item">お問い合わせ内容</span>
                <span class="form__label--required">※</span>
            </div>
            <div class="form__group-content">
                <div class="form__input--textarea">
                    <textarea name="detail" placeholder="お問い合わせ内容をご記載ください" value=>{{ old('detail')}}</textarea>
                </div>
                <div class="form__error">
                    @error('detail')
                    {{ $message }}
                    @enderror
                </div>
            </div>
        </div>
        <div class="form__button">
            <button class="form__button-submit" type="submit">確認画面</button>
        </div>

    </form>
</div>
@endsection