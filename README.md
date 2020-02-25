# Project webapp A


ビルド、立ち上げ
```
$ docker-compose up -d --build
```
laravel、php artisanへのアクセス
```
$ docker-compose exec app ash
```

Auth部分の導入
```
#/work composer require laravel/ui
#/work php artisan ui vue --auth
#/work npm install && npm run dev
``` 
