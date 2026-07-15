FROM php:8.3-cli

# Install system dependencies
RUN apt-get update && apt-get install -y \
    git \
    unzip \
    zip \
    curl \
    libzip-dev \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    nodejs \
    npm

# Install PHP extensions
RUN docker-php-ext-install pdo pdo_mysql zip

# Install Composer
COPY --from=composer:2 /usr/bin/composer /usr/bin/composer

WORKDIR /var/www

COPY . .

# Install PHP dependencies
RUN composer install --no-dev --optimize-autoloader

# Install Node dependencies
RUN npm install

# Build Vite assets
RUN npm run build

# Copy .env jika belum ada
RUN cp .env.example .env || true

# Generate APP_KEY
RUN php artisan key:generate

# Cache Laravel
RUN php artisan config:cache
RUN php artisan route:cache
RUN php artisan view:cache

EXPOSE 10000

CMD php artisan serve --host=0.0.0.0 --port=10000