FROM php:7.2.6-apache

RUN a2enmod rewrite
  #&& a2enmod ssl \
  #&& a2enmod expires \
  #&& a2enmod headers

RUN docker-php-ext-install -j$(nproc) mysqli

RUN set -ex \
	&& . "$APACHE_ENVVARS" \
  && rm "$APACHE_LOG_DIR/error.log" \
  && rm "$APACHE_LOG_DIR/access.log" \
  && rm "$APACHE_LOG_DIR/other_vhosts_access.log"

COPY limit-clients.conf /etc/apache2/conf-enabled/.

CMD ["apache2-foreground"]
