FROM php:7.2-apache

RUN apt-get update && apt-get upgrade -y && apt-get clean && apt-get autoclean && apt-get autoremove -y && apt-get install unzip -y
RUN a2enmod rewrite
WORKDIR /var/www/html

