# Gunakan image PHP dengan ekstensi yang diperlukan untuk Laravel
FROM php:8.1-fpm

# Install dependensi sistem
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    libpq-dev \
    libpng-dev \
    libjpeg62-turbo-dev \
    libfreetype6-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install pdo pdo_mysql gd

# Install Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Set working directory
WORKDIR /var/www/html

# Copy semua file Laravel ke dalam container
COPY . .

# Install dependensi Laravel menggunakan Composer
RUN composer install --no-dev --optimize-autoloader

# Copy file .env (disesuaikan)
COPY .env.example .env

# Generate key aplikasi Laravel
RUN php artisan key:generate

# Expose port 9000 (untuk PHP-FPM)
EXPOSE 9000

CMD ["php-fpm"]