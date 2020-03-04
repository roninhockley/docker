#!/bin/sh
export DEBIAN_FRONTEND=noninteractive
apt update && \
apt install -y \
apache2 \
php \
php-mysql \
libapache2-mod-php \
mysql-client && \
ln -fs /usr/share/zoneinfo/America/Chicago /etc/localtime && \
dpkg-reconfigure --frontend noninteractive tzdata && \
rm -rf /var/lib/apt/lists/*