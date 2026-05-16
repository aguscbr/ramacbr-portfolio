#!/bin/sh

# Crear base de datos SQLite si no existe
touch /var/www/html/database/database.sqlite

# Permisos
chown -R www-data:www-data /var/www/html/storage /var/www/html/database
chmod -R 775 /var/www/html/storage /var/www/html/database

# Storage link
php artisan storage:link --force

# Caché de producción
php artisan config:cache
php artisan route:cache
php artisan view:cache

# Migraciones
php artisan migrate --force

# Iniciar PHP-FPM en background
php-fpm -D

# Iniciar Nginx
nginx -g "daemon off;"