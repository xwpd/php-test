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

### 重启容器
退出php命令行
```bash
exit
```
重启
```bash
docker-compose stop
docker-compose up -d
```

### 接口地址
127.0.0.1:80/api/users

### 运行测试用例
进入php命令行，然后运行下面命令
```bash
php artisan test
```
