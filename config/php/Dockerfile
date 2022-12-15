FROM php:8-fpm

RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli \
	&& pecl install xdebug && docker-php-ext-enable xdebug \