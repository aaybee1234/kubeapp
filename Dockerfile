# Use an official PHP runtime as the base image
FROM php:7.4-apache

# Set the working directory
WORKDIR /var/www/html

# Copy application files to the container
COPY . /var/www/html/

# Install any necessary extensions or dependencies
RUN docker-php-ext-install mysqli

# Expose port 80 for Apache
EXPOSE 80