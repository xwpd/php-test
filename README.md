# 项目说明

## 项目开发环境启动
在根目录运行下面命令启动项目（第一次需要下载镜像，可能比较慢，
注意80端口可能被占用，可以在.env文件更改APP_PORT参数）
```bash
 docker-compose up -d
```
### 进入php 命令行
```bash
docker-compose exec -u root app bash
```
### 项目初始化
运行命令
```bash
cp ./.env.example ./.env
composer install
php artisan migrate
```

