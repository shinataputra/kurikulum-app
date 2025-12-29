FROM php:8.3.1-apache

# Install extension yang dibutuhkan
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip \
    && docker-php-ext-install pdo pdo_mysql \
    && rm -rf /var/lib/apt/lists/*

# Aktifkan mod rewrite
RUN a2enmod rewrite

# Set working directory
WORKDIR /var/www/html

# Copy seluruh source (vendor SUDAH ADA)
COPY . .

# Set document root ke /public
ENV APACHE_DOCUMENT_ROOT=/var/www/html/public


# Update konfigurasi Apache agar pakai /public
RUN sed -ri 's!/var/www/html!/var/www/html/public!g' /etc/apache2/sites-available/*.conf \
    && sed -ri 's!/var/www/!/var/www/html/public!g' /etc/apache2/apache2.conf /etc/apache2/conf-available/*.conf

# Permission
RUN chown -R www-data:www-data /var/www/html
