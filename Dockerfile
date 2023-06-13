# Imagem base do PHP
FROM php:8.1-fpm

# Diretório de trabalho da aplicação
WORKDIR /var/www/html

# Instalação das dependências do sistema
RUN apt-get update && apt-get install -y \
    curl \
    libpng-dev \
    libonig-dev \
    libxml2-dev \
    zip \
    unzip

# Instalação das extensões do PHP necessárias
RUN docker-php-ext-install pdo_mysql mbstring exif pcntl bcmath gd

# Instalação do Composer
RUN curl -sS https://getcomposer.org/installer | php -- --install-dir=/usr/local/bin --filename=composer

# Copiar os arquivos do projeto para o contêiner
COPY . .

# Instalação das dependências do projeto
RUN composer install --optimize-autoloader --no-dev

# Permissões necessárias
RUN chown -R www-data:www-data storage bootstrap/cache

# Geração da chave de aplicação
RUN php artisan key:generate

# Expor a porta utilizada pelo servidor web (por exemplo, Nginx)
EXPOSE 80

# Comando para executar o servidor web do PHP (por exemplo, Nginx)
CMD ["php", "artisan", "serve", "--host=0.0.0.0", "--port=80"]
