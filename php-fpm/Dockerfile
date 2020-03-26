FROM php:7.0-fpm
RUN docker-php-ext-install mysqli && docker-php-ext-enable mysqli
RUN pecl install xdebug-2.6.0 \
    && docker-php-ext-enable xdebug

