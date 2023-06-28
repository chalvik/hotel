FROM php:8.2-fpm

ARG APP_ENV_ARG="prod"
ENV APP_ENV=$APP_ENV_ARG

WORKDIR "/var/www/app"

# Update
RUN apt-get update && \
    apt-get install -y apt-utils automake libtool apt-transport-https wget iputils-ping mc mlocate zip unzip bzip2 gcc rpm git gnupg vim ffmpeg

ADD https://github.com/mlocati/docker-php-extension-installer/releases/latest/download/install-php-extensions /usr/local/bin/

RUN chmod +x /usr/local/bin/install-php-extensions && sync && \
    install-php-extensions pdo_mysql apcu ldap gd mysqli intl opcache zip soap bcmath redis

RUN test $APP_ENV = 'dev' && \
    mv "$PHP_INI_DIR/php.ini-development" "$PHP_INI_DIR/php.ini" && \
    install-php-extensions xdebug && \
    echo "zend_extension=xdebug" >> /usr/local/etc/php/conf.d/xdebug.ini && \
    echo "xdebug.mode=debug" >> /usr/local/etc/php/conf.d/xdebug.ini && \
    echo "xdebug.client_discovery_header=REMOTE_ADDR" >> /usr/local/etc/php/conf.d/xdebug.ini && \
    echo "xdebug.discover_client_host=true" >> /usr/local/etc/php/conf.d/xdebug.ini || \
    echo "Prepare Production environment" && mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"

RUN mkdir -p /var/www/bin

# Install composer
RUN curl -sS https://getcomposer.org/installer | php -- \
        --filename=composer \
        --install-dir=/usr/local/bin  && \
    composer clear-cache

RUN groupmod www-data -g 1000 && usermod www-data -u 1000
RUN chown -R www-data:www-data /var/www/app

#COPY config /root/.ssh/config
#COPY zz-override.conf /usr/local/etc/php-fpm.d/
