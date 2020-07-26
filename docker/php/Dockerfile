FROM php:7.4.0-fpm

RUN apt-get update && apt-get install -y \
        libzip-dev \
    && docker-php-ext-install \
        pdo_mysql \
        zip

# xdebug
RUN pecl install xdebug \
    && docker-php-ext-enable xdebug

# composer install
RUN curl -s http://getcomposer.org/installer | php && \
    echo "export PATH=${PATH}:/var/www/vendor/bin" >> ~/.bashrc && \
    mv composer.phar /usr/local/bin/composer

WORKDIR /var/www/html
