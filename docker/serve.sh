#!/bin/bash

mkdir -p /etc/service/nginx
cp /site/docker/nginx.sh /etc/service/nginx/run
cp /site/docker/nginx.conf /etc/nginx/sites-available/default

mkdir -p /etc/service/php5-fpm
cp /site/docker/php-fpm.sh /etc/service/php5-fpm/run

exec /sbin/my_init