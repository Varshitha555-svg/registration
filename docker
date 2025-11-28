FROM php:8.2-apache

# Change Apache to listen on port 5000 instead of 80
RUN sed -i 's/80/5000/g' /etc/apache2/ports.conf
RUN sed -i 's/:80/:5000/g' /etc/apache2/sites-available/000-default.conf

# Copy project files
COPY . /var/www/html/

# Permissions
RUN chown -R www-data:www-data /var/www/html

# Expose port 5000
EXPOSE 5000

CMD ["apache2-foreground"]
