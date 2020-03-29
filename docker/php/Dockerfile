FROM php:7.4.0-fpm

RUN apt-get update \
    && docker-php-ext-install pdo_mysql

RUN curl -s http://getcomposer.org/installer | php && \
    echo "export PATH=${PATH}:/var/www/vendor/bin" >> ~/.bashrc && \
    mv composer.phar /usr/local/bin/composer
