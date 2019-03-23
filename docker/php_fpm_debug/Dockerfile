FROM example_php_fpm:latest

RUN DEBIAN_FRONTEND=noninteractive apt-get install -y --no-install-recommends php7.3-xdebug

COPY xdebug.ini /etc/php/7.3/fpm/conf.d/20-xdebug.ini
