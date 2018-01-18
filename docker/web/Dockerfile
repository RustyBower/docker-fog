FROM php:7.1-apache

RUN apt-get update
RUN apt-get install -y wget
#RUN apt-get install libpng-dev

# DEBUG
RUN apt-get -y install iputils-ping
RUN apt-get -y install net-tools
RUN apt-get -y install vim

RUN docker-php-ext-install bcmath
#RUN docker-php-ext-install curl
#RUN docker-php-ext-install gd
RUN docker-php-ext-install gettext
RUN docker-php-ext-install json
#RUN docker-php-ext-install ldap
RUN docker-php-ext-install mbstring
RUN docker-php-ext-install mysqli
RUN docker-php-ext-install pdo_mysql

RUN for directory in log service snapins; do mkdir -p /opt/fog/$directory; done

COPY ./fogproject/packages/web/ /var/www/html/fog/
COPY ./docker/web/config.class.php /var/www/html/fog/lib/fog/
