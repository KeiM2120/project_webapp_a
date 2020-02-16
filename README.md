# docker-laravel-vue

やること

```
$ docker-compose run --rm php composer create-project --prefer-dist laravel/laravel .
$ docker-compose run --rm vue vue create .
$ docker-compose up -d
$ docker-compose exec -d php artisan serve
```

変更箇所

``` .env
DB_CONNECTION=mysql
DB_HOST=db
DB_PORT=3306
DB_DATABASE=db
DB_USERNAME=docker
DB_PASSWORD=docker
```