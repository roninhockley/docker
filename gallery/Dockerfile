FROM ubuntu:bionic
COPY runapt.sh /runapt.sh
RUN /runapt.sh
ADD --chown=www-data:www-data webroot /var/www/gallery/
COPY gallery.conf /etc/apache2/sites-available/gallery.conf
RUN a2ensite gallery.conf
EXPOSE 80
ENTRYPOINT [ "apache2ctl", "-D", "FOREGROUND" ]