#!/bin/sh
set -e

cd /var/www/html

php artisan config:clear

# Neon pooled connections break Laravel migrations. Prefer the direct URL when set.
if [ -n "${DB_URL_DIRECT:-}" ]; then
    php artisan migrate --force --no-interaction --database=pgsql_direct
else
    php artisan migrate --force --no-interaction
fi

php artisan storage:link --force --no-interaction 2>/dev/null || true
php artisan config:cache
php artisan route:cache
php artisan view:cache
php artisan event:cache 2>/dev/null || true

exec php artisan serve --host=0.0.0.0 --port="${PORT:-10000}"
