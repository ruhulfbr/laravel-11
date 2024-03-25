FROM node:latest AS node_base

RUN echo "NODE Version:" && node --version
RUN echo "NPM Version:" && npm --version

# Use the official PHP image as base
FROM php:8.3-apache

# Set the working directory in the container
WORKDIR /var/www/html

# Install system dependencies
RUN apt-get update && \
    apt-get install -y git zip unzip libpng-dev libonig-dev libxml2-dev curl

# Install PHP extensions
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Install Node
RUN curl -sL https://deb.nodesource.com/setup_20.x | bash
RUN apt-get install --yes nodejs
RUN node -v
RUN npm -v

# Install Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copy composer.json and composer.lock to container
COPY composer.json composer.lock /var/www/html/

# Install PHP dependencies
RUN export COMPOSER_ALLOW_SUPERUSER=1 && composer install --no-scripts

# Copy the rest of the application code
COPY . /var/www/html

# Enable Apache modules and configure virtual host
RUN a2enmod rewrite
COPY apache-config.conf /etc/apache2/sites-available/000-default.conf

# Expose port 80 (Apache)
EXPOSE 80

# Start Apache server
CMD ["apache2-foreground"]
