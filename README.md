# docker-laravel-handson

参考にした記事
[【初心者向け】20分でLaravel開発環境を爆速構築するDockerハンズオン](https://qiita.com/ucan-lab/items/56c9dc3cf2e6762672f4)


---

#### cloneしたら

```
rm -rf .git
```
で、DockerLaravelHandsonのgit情報を消す

```
git init
```
でgit初期化

.envファイルの COMPOSE_PROJECT_NAMEを、自分の望むプロジェクト名に変更する

```
docker-compose up -d --build
```
でコンテナ起動

```
docker-compose exec app ash
```

でappコンテナに入る

```
composer create-project --prefer-dist "laravel/laravel=X.X.*" .
// X.Xには自分の入れたいバージョンを書く
```

