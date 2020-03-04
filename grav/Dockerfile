FROM ubuntu:bionic
RUN DEBIAN_FRONTEND=noninteractive  && \
apt update && apt install -y \
php-fpm \
php-gd \
php-curl \
php-zip \
php-mbstring \
php-xml \
nginx && \
ln -fs /usr/share/zoneinfo/America/Chicago /etc/localtime && \
dpkg-reconfigure --frontend noninteractive tzdata && \
rm -rf /var/lib/apt/lists/*
WORKDIR /etc/nginx
COPY nginx.conf .
WORKDIR /etc/nginx/sites-available
COPY grav .
WORKDIR /etc/nginx/sites-enabled
RUN ln -fs /etc/nginx/sites-available/grav grav
EXPOSE 80
ENTRYPOINT [ "nginx" ]
CMD [ "-g", "daemon off;" ]