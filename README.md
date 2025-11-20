# お問い合わせフォーム

![alt text](<スクリーンショット 2025-09-18 9.37.41.png>)

【管理画面】
![alt text](<スクリーンショット 2025-09-18 9.37.30.png>)

![alt text](<スクリーンショット 2025-09-18 9.38.46.png>)

## 環境構築

Docker ビルド

1.  git clone https://github.com/uchi-a000/contactForm
2.  docker compose up -d --build

Laravel 環境構築

1.  docker compose exe php bash
2.  composer install
3.  .env.example ファイルから.env を作成し、環境変数を変更
4.  php artisan key:generate
5.  php artisan migrate
6.  php artisan db:seed

## 機能

基本的な web ページ作成の練習のために作成しました。

1. お問い合わせフォーム
2. ログイン画面
3. ユーザー登録画面
4. 管理者画面  
   キーワード・性別・お問い合わせの種類・日付で検索可能  
   詳細モーダル画面より解決済みに変更可能  
   解決済みのデータは表の最後尾へ移動

## 使用環境

・PHP 8.0
・laravel 10.0
・MySQL 　 8.0

## URL

・環境開発:http://localhost/
・phpMyAdmin:http://localhost:8080/
