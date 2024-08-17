FROM php:8.3-fpm

# Configure non-root user.
ARG PUID=1000
ENV PUID ${PUID}
ARG PGID=1000
ENV PGID ${PGID}

# Instalar dependencias
RUN apt-get update && apt-get install -y \
    libpng-dev \
    libjpeg-dev \
    libfreetype6-dev \
    curl \
    zip \
    git \
    && docker-php-ext-configure gd --with-freetype --with-jpeg \
    && docker-php-ext-install gd pdo pdo_mysql

RUN groupmod -o -g ${PGID} www-data \
    && usermod -o -u ${PUID} -g www-data www-data \
    && mkdir -p /home/www-data \
    && chown -R www-data:www-data /home/www-data \
    && usermod -d /home/www-data www-data    

# Configurar el directorio de trabajo
WORKDIR /var/www

# Copiar los archivos de composer primero para aprovechar la cache
COPY composer.json composer.lock ./

# Instalar Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Instalar dependencias de PHP
RUN composer install --no-autoloader --no-scripts

# Copiar el resto del código fuente
COPY . .

# Ejecutar autoloader de Composer
RUN composer dump-autoload

# Ajustar permisos de directorios críticos
RUN chown -R www-data:www-data /var/www/storage /var/www/bootstrap/cache
RUN chmod -R 775 /var/www/storage /var/www/bootstrap/cache


# Expone el puerto
EXPOSE 9000

# Comando para iniciar PHP-FPM
CMD ["php-fpm"]
