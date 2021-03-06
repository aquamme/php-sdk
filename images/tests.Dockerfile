# syntax=docker/dockerfile:labs
# withinboredom/php-base-min == docker build --pull -t withinboredom/php-base-min --target base -f images/tests.Dockerfile .
FROM php:8.0-fpm AS base
COPY --from=mlocati/php-extension-installer /usr/bin/install-php-extensions /usr/local/bin/
RUN apt-get update && apt-get install -y wget git unzip && rm -rf /var/cache/apt/lists
RUN install-php-extensions curl zip && mkdir -p /tests && rm -rf /var/cache/apt/lists
WORKDIR /tests

FROM withinboredom/php-base-min AS vendor
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer
COPY composer.json composer.json
COPY composer.lock composer.lock
RUN composer install --no-dev -o -n

FROM withinboredom/php-base-min AS config
COPY --from=vendor /tests/vendor vendor
COPY . /tests

FROM config AS production
RUN mv "$PHP_INI_DIR/php.ini-production" "$PHP_INI_DIR/php.ini"
