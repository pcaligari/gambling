FROM php:fpm

RUN apt-get update && apt-get upgrade -y
RUN apt-get install curl
RUN apt-get install -y git

RUN curl -sSL https://getcomposer.org/installer | php \
    && mv composer.phar /usr/local/bin/composer
	