FROM php:8.1-cli

RUN apt-get update && apt-get install -y \
    unzip zip curl libonig-dev libxml2-dev libzip-dev \
    mariadb-client \
    && docker-php-ext-install intl pdo pdo_mysql zip

# Composerインストール
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer