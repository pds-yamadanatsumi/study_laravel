FROM php:8.1.1-fpm
RUN cd /usr/bin && curl -s http://getcomposer.org/installer | php && ln -s /usr/bin/composer.phar /usr/bin/composer
RUN apt-get update && apt-get install -y libmemcached-dev ssh libonig-dev git zip unzip
RUN /etc/init.d/ssh restart
RUN docker-php-ext-install pdo_mysql mbstring opcache
RUN apt-get install -y zlib1g-dev && apt-get install -y libzip-dev
RUN apt-get install -y libonig-dev libfreetype6-dev libjpeg62-turbo-dev libpng-dev libjpeg-dev
RUN docker-php-ext-install pdo_mysql zip gd
RUN docker-php-ext-configure gd --with-freetype=/usr/include/ --with-jpeg=/usr/include/
RUN docker-php-ext-install -j$(nproc) gd

RUN pecl bundle -d /usr/src/php/ext redis \
    && rm /usr/src/php/ext/redis-*.tgz \
    && docker-php-ext-install redis

COPY docker/php-fpm/conf.d/php.ini /usr/local/etc/php/php.ini
COPY docker/php-fpm/conf.d/php-fpm.conf /usr/local/etc/php-fpm.conf
