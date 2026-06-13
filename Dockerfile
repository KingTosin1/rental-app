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
# COPY PROJECT FILES
# =========================
COPY . .

# =========================
# INSTALL DEPENDENCIES
# =========================
RUN composer install --no-dev --optimize-autoloader

# =========================
# LARAVEL FOLDERS FIX (IMPORTANT)
# =========================
RUN mkdir -p storage/framework/cache \
    && mkdir -p storage/framework/sessions \
    && mkdir -p storage/framework/views \
    && mkdir -p bootstrap/cache \
    && chmod -R 777 storage bootstrap/cache

# =========================
# CLEAR OLD CACHE (CRITICAL FIX)
# =========================
RUN php artisan config:clear || true \
    && php artisan cache:clear || true \
    && php artisan route:clear || true \
    && php artisan view:clear || true

# Remove stale cached config if it exists
RUN rm -f bootstrap/cache/config.php || true

# =========================
# OPTIMIZE (SAFE FOR BUILD)
# =========================
RUN php artisan config:cache || true

# =========================
# EXPOSE RENDER PORT
# =========================
EXPOSE 10000

# =========================
# START LARAVEL
# =========================
CMD php artisan serve --host=0.0.0.0 --port=10000