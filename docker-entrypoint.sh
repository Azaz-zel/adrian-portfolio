#!/bin/sh
set -e

# Hosting platforms (Render, Koyeb, Zeabur, Fly) hand the container a port to
# listen on. Apache is hard-wired to 80 in the base image, so rewrite it here.
: "${PORT:=80}"
sed -i "s/^Listen .*/Listen ${PORT}/" /etc/apache2/ports.conf
sed -i "s/<VirtualHost \*:[0-9]*>/<VirtualHost *:${PORT}>/" \
    /etc/apache2/sites-available/000-default.conf

# Without an APP_KEY every encrypted cookie and session throws. Generate an
# ephemeral one so the container boots instead of crash-looping, but say so
# loudly: sessions and the admin login reset on every redeploy until a real
# APP_KEY is set in the platform's environment variables.
if [ -z "${APP_KEY}" ]; then
    echo "WARNING: APP_KEY is not set. Generating a temporary key."
    echo "         Set APP_KEY in your hosting environment to keep sessions alive across deploys."
    APP_KEY="base64:$(head -c 32 /dev/urandom | base64)"
    export APP_KEY
fi

# A managed database often accepts connections a few seconds after the web
# container starts. Retry instead of dying on the first refused connection.
attempt=1
until php artisan migrate --force; do
    if [ "${attempt}" -ge 10 ]; then
        echo "ERROR: database still unreachable after ${attempt} attempts. Starting anyway."
        break
    fi
    echo "Database not ready (attempt ${attempt}/10) — retrying in 3s..."
    attempt=$((attempt + 1))
    sleep 3
done

php artisan config:cache
php artisan route:cache
php artisan view:cache

# The artisan commands above run as root, so the cache and log files they
# create would otherwise be unwritable by Apache.
chown -R www-data:www-data storage bootstrap/cache

exec "$@"
