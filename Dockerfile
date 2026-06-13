FROM php:8.2-cli

# =========================
# SYSTEM DEPENDENCIES
# =========================
RUN apt-get update && apt-get install -y \
    git \
    curl \
    unzip \
    zip \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    libzip-dev

# =========================
# PHP EXTENSIONS
# =========================
RUN docker-php-ext-install \
    pdo \
    pdo_mysql \
    mbstring \
    exif \
    pcntl \
    bcmath \
    gd \
    zip

# =========================
# COMPOSER
# =========================
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# =========================
# WORKDIR
# =========================
WORKDIR /var/www

# =========================
# COPY PROJECT
# =========================
COPY . .

# =========================
# ENV FORCE (VERY IMPORTANT)
# prevents SQLite fallback issues
# =========================
ENV DB_CONNECTION=mysql

# =========================
# INSTALL DEPENDENCIES
# =========================
RUN composer install --no-dev --optimize-autoloader

# =========================
# LARAVEL STORAGE FIX
# =========================
RUN mkdir -p storage/framework/cache \
    && mkdir -p storage/framework/sessions \
    && mkdir -p storage/framework/views \
    && mkdir -p bootstrap/cache \
    && chmod -R 777 storage bootstrap/cache

# =========================
# CLEAR ALL CACHES (CRITICAL FIX)
# =========================
RUN php artisan optimize:clear || true

# Remove cached config if it exists
RUN rm -f bootstrap/cache/config.php || true

# Re-cache config safely
RUN php artisan config:cache || true

# =========================
# EXPOSE PORT (RENDER)
# =========================
EXPOSE 10000

# =========================
# START SERVER
# =========================
CMD php artisan serve --host=0.0.0.0 --port=10000