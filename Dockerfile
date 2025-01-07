# 1. Указываем базовый образ (здесь PHP 8.0)
FROM php:8.0-cli

# 2. Устанавливаем необходимые зависимости
RUN apt-get update && apt-get install -y php-fileinfo git 
    unzip \
    libcurl4-openssl-dev \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    libssl-dev \
    && apt-get clean

# 3. Устанавливаем Composer (для управления зависимостями в PHP)
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# 4. Проверяем версию Composer
RUN composer --version

# 5. Копируем файлы из вашего проекта в контейнер
COPY . /app

# 6. Устанавливаем зависимости, указанные в composer.json
WORKDIR /app
RUN composer install --ignore-platform-reqs

# 7. Открываем порт (если нужно)
EXPOSE 8080

# 8. Запускаем приложение (если у вас PHP приложение)
CMD ["php", "-S", "0.0.0.0:8080", "madeline.php"]
