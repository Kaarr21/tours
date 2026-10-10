#!/bin/sh
set -e

cd /var/www/html

php artisan config:clear
php artisan migrate --force --no-interaction
php artisan storage:link --force --no-interaction 2>/dev/null || true
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache 2>/dev/null || true

exec php artisan serve --host=0.0.0.0 --port="${PORT:-10000}"
