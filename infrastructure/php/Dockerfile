FROM php:8.1-fpm

# Arguments defined in docker-compose.yml
ARG user
ARG uid

# Install system dependencies
RUN apt-get update && apt-get install -y \
        wget \
        libzip-dev \
        zip \
        unzip \
        p7zip-full \
        sendmail \
        ca-certificates \
        libcurl4-openssl-dev \
        pkg-config \
        libssl-dev

# Clear cache
RUN apt-get clean && rm -rf /var/lib/apt/lists/*

# Install PHP extensions
RUN docker-php-ext-install zip mysqli pdo pdo_mysql opcache

RUN pecl install mongodb
RUN echo "extension=mongodb.so" >> /usr/local/etc/php/conf.d/mongodb.ini

# Install composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Create system user
RUN useradd -G www-data,root -u $uid -d /home/$user $user
RUN mkdir -p ../db
RUN mkdir -p ../database
RUN mkdir -p /home/$user/.composer && \
    chown -R $user:$user /home/$user

WORKDIR /var/www/html