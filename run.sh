#!/bin/sh
cd /var/www
php artisan migrate
supervisord -c /etc/supervisord.conf