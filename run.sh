#!/bin/sh
cd /var/www
php artisan migrate
php artisan storage:link
supervisord -c /etc/supervisord.conf