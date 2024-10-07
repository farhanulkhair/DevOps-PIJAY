FROM php:8.2-apache

# Install dependencies
RUN apt-get update && apt-get install -y \
    git \
    curl \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    zip \
    unzip \
    nodejs \
    npm \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

# Aktifkan mod_rewrite untuk Apache
RUN a2enmod rewrite

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Set working directory
WORKDIR /var/www/html

# Copy seluruh project
COPY . /var/www/html/

# Install dependencies PHP dengan Composer
RUN composer install --no-dev --optimize-autoloader

# Install dependencies Node.js dengan npm untuk Tailwind
RUN npm install

# Build Tailwind CSS
RUN npm run build

# Konfigurasikan Apache untuk mengarahkan ke folder public
RUN echo '<VirtualHost *:80>\n\
    DocumentRoot /var/www/html/public\n\
    <Directory /var/www/html/public>\n\
        AllowOverride All\n\
        Require all granted\n\
    </Directory>\n\
</VirtualHost>' > /etc/apache2/sites-available/000-default.conf

# Atur permissions
RUN chown -R www-data:www-data /var/www/html \
    && chmod -R 775 /var/www/html/storage \
    && chmod -R 775 /var/www/html/bootstrap/cache \
    && chmod -R 755 /var/www/html

# Copy dan rename .env file
RUN if [ -f "/var/www/html/.env.example" ]; then \
        cp /var/www/html/.env.example /var/www/html/.env; \
    fi

# Generate application key
RUN php /var/www/html/artisan key:generate

EXPOSE 80

CMD ["apache2-foreground"]
