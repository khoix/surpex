# Use the official PHP image with Apache
FROM php:7.4-apache

# Enable PHP extensions
RUN docker-php-ext-install pdo pdo_mysql mysqli && \ 
	docker-php-ext-enable mysqli && \
    echo "extension=mysqli" > /usr/local/etc/php/conf.d/docker-php-ext-mysqli.ini

# Add the following lines
COPY ./php.ini /usr/local/etc/php/
RUN cat /usr/local/etc/php/php.ini

# Set the working directory
WORKDIR /var/www/html

# Copy the web app files to the working directory
COPY . /var/www/html

# Copy the Apache port configuration file
COPY apache_port.conf /etc/apache2/ports.conf

# Expose the Apache port
EXPOSE 8080
