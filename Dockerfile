FROM php.8.2-apache

COPY . /var//www/html

RUN docker-php-ext-install mysqli pdp pdp_mysqli

EXPOSE 80
