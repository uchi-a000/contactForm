# お問い合わせフォーム

## 環境構築

Docker ビルド

1.  https://github.com/uchidaarisa/test-larabel2
2.  docker-compose up -d --build

Laravel 環境構築

1.  docker-compose exe php bash
2.  composer install
3.  .env.example ファイルから.env を作成し、環境変数を変更
4.  php artisan key:generate
5.  php artisan migrate
6.  php artisan db:seed

## 使用環境

・PHP 8.0
・laravel 10.0
・MySQL 　 8.0

## ER 図

<img width="1151" alt="スクリーンショット 2024-03-17 0 49 15" src="https://github.com/uchidaarisa/test-larabel2/assets/157282769/3b40b599-0c95-4d08-86b3-fc2bf44bd593">

## URL

・環境開発:http://localhost/
・phpMyAdmin:http://localhost:8080/
