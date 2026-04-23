FROM php:8.3.6-cli

# Install dependencies
RUN apt-get update && apt-get install -y \
    unzip \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    zip \
    curl \
    && docker-php-ext-install pdo pdo_mysql gd zip

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www

# Copy existing Laravel project
COPY . .

# Install Laravel dependencies
RUN composer install --no-interaction --optimize-autoloader

EXPOSE 8000

CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=8000"]

