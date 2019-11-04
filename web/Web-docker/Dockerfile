FROM ubuntu:latest

RUN apt update && apt upgrade -y && DEBIAN_FRONTEND=noninteractive apt install -y apache2 php php-mysql nano 
RUN a2enmod ssl
RUN a2enmod rewrite

COPY WEB/seed-it.eu.conf /etc/apache2/sites-available

RUN ln -s /etc/apache2/sites-available/seed-it.eu.conf /etc/apache2/sites-enabled

RUN mkdir /var/www/images

COPY web/images/Raspberry.png /var/www/images
COPY web/images/farm-09-2-1024x104.png /var/www/images
COPY web/images/farm-27-1024x290.png /var/www/images
COPY web/images/seed-it-logo.png /var/www/images
COPY web/images/seed.png /var/www/images

EXPOSE 80 443

CMD apachectl -DFOREGROUND
