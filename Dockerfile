FROM php:7.2-apache

LABEL MAINTAINER="DIEGO SANTOS <diegosantosws1@gmail.com>"

COPY . .
#COPY vhost.conf /etc/apache2/sites-available/000-default.conf

WORKDIR /src/github.com/DiegoSantosWS/wsitebrasil/projeto
