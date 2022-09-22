FROM php:7.4-apache
COPY src/ /var/www/html
RUN set -x && \
  apt-get -y update && \
  apt-get install -y libicu-dev postgresql-server-dev-9.4 && \
  NPROC=$(grep -c ^processor /proc/cpuinfo 2>/dev/null || 1) && \
  docker-php-ext-install -j${NPROC} intl && \
  docker-php-ext-install -j${NPROC} pdo_pgsql && \
  docker-php-ext-install -j${NPROC} pdo_mysql && \
  rm -rf /tmp/pear