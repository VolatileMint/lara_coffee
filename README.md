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

```
composer create-project laravel/laravel sample
```

現在のリポジトリに作成したい場合は

```
composer create-project　--prefer-dist laravel/laravel .
```

### 既存のプロジェクトをGithubのリポジトリに登録する
登録したいプロジェクトの内で、

```
git init
```

vendorをgitの管理から外す

```
vi vendor/.gitignore
```

ファイルの中身

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

コントローラの作成コマンド

```
php artisan make:controller TestController
```

モデル(とマイグレーションファイル)の作成コマンド

```
php artisan make:model UsersModel --migration
```

マイグレーションファイルにテーブルの定義とかを書くっぽい

テーブル作成コマンド(database/migrations配下のファイルに従って作成される)
```
php artisan migrate 
```



### 参考サイト
- [laravel基本操作](https://tech-blog.rakus.co.jp/entry/20201203/laravel#Laravel%E3%81%AE%E5%9F%BA%E6%9C%AC%E6%A9%9F%E8%83%BD%E7%A2%BA%E8%AA%8D)
- [db接続とデータ取得](https://snome.jp/framework/laravel-connect-db/)
- [モデル作成とマイグレーション](http://taustation.com/laravel-model-and-migration/)
