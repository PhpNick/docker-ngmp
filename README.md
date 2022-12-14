# Docker-окружение со следующими сервисами:

- [NGINX](https://hub.docker.com/_/nginx)
- [PHP](https://hub.docker.com/_/php)
- [composer](https://hub.docker.com/_/composer)
- [Adminer](https://hub.docker.com/_/adminer)
- [MySQL](https://hub.docker.com/_/mysql/)

## Настройка

Измените `.env` для задания версий устанавливаемых сервисов (NGINX, Adminer, MySQL), для задания пароля и названия БД. Версия PHP прописана в файле config/php/Dockerfile.

## Установка и запуск

Откройте терминал, перейдите в папку с `docker-compose.yml` и запустите:

```
docker-compose up -d
```

### Остановка и удаление контейнеров

Чтобы остановить и удалить контейнеры используйте команду `down`:

```
docker-compose down
```

### Сайт

Для доступа к сайту нужно перейти по адресу `http://localhost:8000`.
В качестве демонстрационного примера используется фреймворк Flight, который устанавливается с помощью composer.
Также для демонстрации устанавливается подключение с БД, с помощью mysqli (установка прописана в config/php/Dockerfile).

### Adminer

Для доступа к Adminer нужно перейти по адресу `http://localhost:8080`.
Логин по умолчанию `root`, а пароль задан в файле `.env` (MYSQL_PASSWORD).
