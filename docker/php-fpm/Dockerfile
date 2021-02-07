FROM php:7.3-fpm

# Laravel用の設定

# install pdo
RUN docker-php-ext-install pdo_mysql

# install composer
RUN curl -sS https://getcomposer.org/installer | php
RUN mv composer.phar /usr/local/bin/composer

# install git
RUN apt-get update
RUN apt-get install -y git