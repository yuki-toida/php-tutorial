FROM php:fpm-alpine

COPY php.ini /usr/local/etc/php/

RUN docker-php-ext-install mysqli pdo pdo_mysql mbstring