# lara_coffee
### 目的
Laravelを使ったコーヒーのレビューサイトの構築



## 使い方
DEMOの実行方法などwebアプリの使い方の説明

## 環境
Xampp 8.1.4

`php -v`
PHP 8.1.4

`httpd -v` 
Apach 2.4.52

`mysql --version`
MySQL 10.4.24

`php artisan -V`
Laravel 9.18.0


## 制作時の手順

### laravelのインストール
新しくsampleディレクトリにLaravelプロジェクトを作成

`
composer create-project laravel/laravel sample
`

現在のリポジトリに作成したい場合は

`
composer create-project　--prefer-dist laravel/laravel .
`

### 既存のプロジェクトをGithubのリポジトリに登録する
登録したいプロジェクトの内で、

`
git init
`

vendorをgitの管理から外す

`
vi vendor/.gitignore
`

ファイルの中身は

```
# src フォルダの中身をすべて無視
src/
```

普通にaddとcommitをして

```
git add .
git commit -m "first commit"
```

空のリポジトリにある
…or push an existing repository from the command lineの部分(以下コマンド)を実行すればGithubと紐づけられる

```
git remote add origin git@github.com:VolatileMint/lara_coffee.git
git branch -M main
git push -u origin main
```
