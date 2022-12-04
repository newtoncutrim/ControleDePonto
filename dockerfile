FROM php:7.1-apache
RUN docker-php-ext-install mysqli
RUN a2enmod rewrite
RUN apt update
RUN apt install -y locales-all