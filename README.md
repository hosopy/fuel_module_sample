# FuelPHPのモジュール接続サンプル

[FuelPHP Advent Calendar 2013](http://atnd.org/events/45096) 16日目の記事「[FuelPHPのmoduleを使いこなす](http://qiita.com/hosopy/items/0428be74f1c3868c55ba)」で利用したサンプルコードです。

## 動作確認

* php 5.4以上を前提

```php
$ git clone git@github.com:hosopy/fuel_module_sample.git
$ cd fuel_module_sample
$ git submodule init
$ git submodule update
$ php oil server
```

## 内容

各URLに対して、どのmoduleのどのcontroller/actionが呼ばれるのかの一覧

* `/admin`
   * adminモジュールの`root/index`アクションが呼ばれます
   * これは、`fuel/app/modules/admin/config/routes.php`の`_root_`定義によるものです
* `/admin/user`
   * userモジュールの`admin/index`アクションが呼ばれます。
* `/admin/user/analytics`
   * userモジュールの`admin/analytics/index`アクションが呼ばれます。
* `/api`
   * apiモジュールの`root/index`アクションが呼ばれます
   * これは、`fuel/app/modules/api/config/routes.php`の`_root_`定義によるものです
* `/api/user`
   * userモジュールの`api/index`アクションが呼ばれます。
* `/api/user/analytics`
   * userモジュールの`api/analytics/index`アクションが呼ばれます。
* `/user`
   * userモジュールの`root/index`アクションが呼ばれます
   * これは、`fuel/app/modules/user/config/routes.php`の`_root_`定義によるものです
