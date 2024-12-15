# Sử dụng PHP với Apache
FROM php:8.2-apache

# Cài đặt các extension cần thiết
RUN apt-get update && apt-get install -y \
    libzip-dev \
    zip \
    unzip \
    git \
    curl \
    libpng-dev \
    libonig-dev \
    && docker-php-ext-install pdo_mysql mbstring zip gd

# Cài đặt Composer
COPY --from=composer:latest /usr/bin/composer /usr/bin/composer

# Kích hoạt mod_rewrite của Apache
RUN a2enmod rewrite

# Copy mã nguồn Laravel vào container
COPY . /var/www/html

# Đặt quyền cho storage và bootstrap/cache
RUN chown -R www-data:www-data /var/www/html/storage /var/www/html/bootstrap/cache

# Chuyển đến thư mục làm việc
WORKDIR /var/www/html

# Chạy các lệnh cài đặt
RUN composer install --optimize-autoloader --no-dev
RUN php artisan key:generate

# Copy và cấu hình file .env
COPY .env.example .env
RUN php artisan config:cache
# Expose port 80 để Apache hoạt động
EXPOSE 80

