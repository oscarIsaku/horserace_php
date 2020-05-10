# サーバ側
FROM php:7.0-apache
COPY php.ini /usr/local/etc/php/
RUN apt-get update \
    && apt-get install -y libpq-dev \
    && docker-php-ext-install pdo_mysql pdo_pgsql