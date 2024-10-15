# Use an official PHP image with Apache and version 8.1.30
FROM php:8.1.30-apache

# Install system dependencies and PHP extensions
# gd: Require libpng-dev, libjpeg-dev, libfreetype6-dev
# tidy: Require libzip-dev, libtidy-dev
# zip: Require libzip-dev
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libzip-dev \
    libtidy-dev \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install -j$(nproc) \
        gd \
        exif \
        mysqli \
        pdo \
        pdo_mysql \
        tidy \
        zip

# Set the working directory
WORKDIR /var/www/html

# Expose port 80 for Apache
EXPOSE 80
