FROM php:7.3-fpm

RUN apt-get update

RUN apt-get install -y \
        git \
        libzip-dev \
        unzip \
        && docker-php-ext-install zip

# BAIXA O COMPOSER 
RUN curl https://getcomposer.org/composer.phar --output /usr/bin/composer
# DÁ A PERMISSÃO PARA TODOS EXECUTAREM PARA TUDO QUE ESTÁ DENTRO DA PASTA COMPOSER
RUN chmod +x /usr/bin/composer

WORKDIR /php7