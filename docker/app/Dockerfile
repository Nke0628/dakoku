FROM php:7.4-fpm

ENV TZ Asia/Tokyo

RUN apt-get update \
&& apt-get install -y \
git \
zip \
unzip \
libzip-dev \
libicu-dev \
libonig-dev \
vim \
libpng-dev \
libpq-dev \
&& docker-php-ext-install pdo_mysql bcmath

COPY ./docker/app/php.ini /usr/local/etc/php/php.ini

COPY --from=composer:2.0 /usr/bin/composer /usr/bin/composer

ENTRYPOINT ["./docker/app/startup.sh"]