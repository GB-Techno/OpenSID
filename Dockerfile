# Use an official PHP image with Apache and version 8.1.30
FROM php:8.1.30-apache

# # Install system dependencies and PHP extensions
# RUN apt-get update && apt-get install -y \
#     curl \
#     libpng-dev \
#     libjpeg-dev \
#     libfreetype6-dev \
#     libonig-dev \
#     libxml2-dev \
#     libzip-dev \
#     libtidy-dev \
#     zlib1g-dev \
#     && docker-php-ext-configure gd --with-freetype --with-jpeg \
#     && docker-php-ext-install -j$(nproc) \
#         gd \
#         exif \
#         mysqli \
#         pdo \
#         pdo_mysql \
#         tidy \
#         zip \
#         mbstring \
#         iconv \
#         fileinfo \
#         json

# # Enable extensions (optional, in case some are not enabled automatically)
# RUN docker-php-ext-enable gd mysqli exif tidy zip pdo_mysql

# # Enable Apache mod_rewrite (if you need it)
# RUN a2enmod rewrite

# # Set the working directory
# WORKDIR /var/www/html

# # Copy your PHP files into the container
# COPY . /var/www/html

# Expose port 80 for Apache
EXPOSE 80
