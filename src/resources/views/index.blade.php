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
    </div>
</header>
<div class="contact-form__content">
    <div class="contact-form__heading">
        <h2>お問い合わせ</h2>
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
            <div class="contact-form__group">
                <label class="contact-form__label">
                    性別<span class="contact-form__required">※</span>
                </label>
                <div class="contact-form__gender-inputs">
                    <div class="contact-form__gender-option">
                        <label class="contact-form__gender-label">
                            <input class="contact-form__gender-input" name="gender" type="radio" id="male" value="1" {{
                old('gender')==1 || old('gender')==null ? 'checked' : '' }}>
                            <span class="contact-form__gender-text">男性</span>
                        </label>
                    </div>
                    <div class="contact-form__gender-option">
                        <label class="contact-form__gender-label">
                            <input class="contact-form__gender-input" type="radio" name="gender" id="female" value="2" {{
                old('gender')==2 ? 'checked' : '' }}>
                            <span class="contact-form__gender-text">女性</span>
                        </label>
                    </div>
                    <div class="contact-form__gender-option">
                        <label class="contact-form__gender-label" for="other">
                            <input class="contact-form__gender-input" type="radio" name="gender" id="other" value="3" {{
                old('gender')==3 ? 'checked' : '' }}>
                            <span class="contact-form__gender-text">その他</span>
                        </label>
                    </div>
                </div>
                <p class="contact-form__error-message">
                    @error('gender')
                    {{ $message }}
                    @enderror
                </p>
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
                    <input type="tel" name="tel_1" id="tel" value="{{ old('tel_1') }}" placeholder="080" /> -
                    <input type="tel" name="tel_2" value="{{ old('tel_2') }}" placeholder="1234" /> -
                    <input type="tel" name="tel_3" value="{{ old('tel_3') }}" placeholder="5678" />
                </div>
                <div class="form__error">
                    @error('tel')
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
                    <select class="content-box_item" name="category_id">
                        <option value="">選択してください</option>
                        @foreach($categories as $category)
                        <option value="{{ $category->id }}"
                            @if($category->id == old('category_id')) selected @endif>
                            {{$category->category}}
                        </option>
                        @endforeach
                    </select>
                </div>
                <div class="form__error">
                    @error('category_id')
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