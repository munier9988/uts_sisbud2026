FROM php:8.4-cli
WORKDIR /app
COPY . .
RUN docker-php-ext-install pdo pdo_mysql
RUN chown -R www-data:www-data /app/storage /app/bootstrap/cache
CMD ["php", "artisan", "serve", "--host=0.0.0.0"]