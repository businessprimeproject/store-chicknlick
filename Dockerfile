FROM php:8.4-apache

RUN apt-get update \
    && apt-get install -y --no-install-recommends libzip-dev libpng-dev libjpeg62-turbo-dev libfreetype6-dev libonig-dev libpq-dev unzip \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install bcmath exif gd mbstring pdo_mysql pdo_pgsql zip \
    && a2enmod rewrite \
    && rm -rf /var/lib/apt/lists/*

COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www/html
COPY . .

RUN composer install --no-dev --no-interaction --prefer-dist --optimize-autoloader \
    && mkdir -p storage/framework/cache storage/framework/sessions storage/framework/views bootstrap/cache database \
    && touch database/database.sqlite \
    && chown -R www-data:www-data storage bootstrap/cache database

COPY docker/apache-vhost.conf /etc/apache2/sites-available/000-default.conf

EXPOSE 80
CMD ["sh", "-c", "php artisan migrate --force && php artisan db:seed --force && apache2-foreground"]
