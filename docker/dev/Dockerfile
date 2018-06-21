FROM php:5.6.31-apache

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

COPY 000-default.conf /etc/apache2/sites-available/.
COPY php.ini /usr/local/etc/php/.

CMD ["apache2-foreground"]
