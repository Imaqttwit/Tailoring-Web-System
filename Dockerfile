# Use a base image with PHP and Apache
FROM php:7.4-apache

# Set the working directory
WORKDIR /var/www/html

# Copy the source code into the container
COPY . /var/www/html

# Install PHP dependencies
RUN apt-get update && apt-get install -y \
    libzip-dev zip unzip \
    && docker-php-ext-install zip

# Set up Apache configuration
RUN a2enmod rewrite

# Set the ServerName directive
RUN echo "ServerName localhost" >> /etc/apache2/apache2.conf

# Expose the port
EXPOSE 80

# Define the entry point command
CMD ["apache2-foreground"]
