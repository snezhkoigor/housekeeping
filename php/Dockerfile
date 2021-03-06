FROM php:7.2-fpm
#FROM php:7.1-fpm
#FROM php:7.0-fpm

ENV COMPOSER_ALLOW_SUPERUSER 1
ENV COMPOSER_CACHE_DIR /composer
RUN php -r "copy('https://getcomposer.org/installer', 'composer-setup.php');" &&\
    php composer-setup.php --install-dir=/usr/bin --filename=composer &&\
    rm -f composer-setup.php

# Install dependencies with Composer.
ONBUILD RUN cd /var/www/html && composer install --no-scripts

# Install extentions. See https://hub.docker.com/_/php/
# - PHP Core Extensions
RUN apt-get update && apt-get install -y \
       libfreetype6-dev \
       libjpeg62-turbo-dev \
       libmcrypt-dev \
       libpng-dev \
       libzip-dev \
       zip \
       curl \
       git \
       curl \
       autoconf \
       libbz2-dev \
       libfontconfig1 \
    && docker-php-ext-configure zip --with-libzip \
    && docker-php-ext-install zip \
    && docker-php-ext-install bz2 \
    && docker-php-ext-install -j$(nproc) iconv \
    && docker-php-ext-install pcntl

# Install MySql
RUN docker-php-ext-install pdo pdo_mysql

# - PECL extensions
RUN pecl install redis-3.1.6 \
    && pecl install xdebug-2.6.0 \
    && docker-php-ext-enable redis xdebug

# - Xdebug
RUN echo xdebug.remote_enable=1 >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo xdebug.remote_port=9000 >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo xdebug.remote_autostart=1 >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo xdebug.remote_connect_back=0 >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo xdebug.idekey=PHPSTORM >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini \
    && echo xdebug.remote_host=docker.for.mac.localhost >> /usr/local/etc/php/conf.d/docker-php-ext-xdebug.ini

# Clean up
RUN apt-get clean && \
    rm -rf /tmp/* /var/tmp/* && \
    rm /var/log/lastlog /var/log/faillog

RUN usermod -u 1000 www-data
ONBUILD RUN chmod -R 777 /var/www/html/storage

# - config files
COPY php.ini /usr/local/etc/php/redis.conf
COPY www.conf /usr/local/etc/php/fpm/pool.d/www.conf
