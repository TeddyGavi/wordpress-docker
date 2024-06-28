FROM wordpress:6.5.5-fpm-alpine

# Install dependencies
RUN apk add --no-cache \
  nodejs \
  npm \
  yarn

# Install Composer
COPY ./wordpress_docker/composer_install.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/composer_install.sh
RUN /usr/local/bin/composer_install.sh \
  && mv composer.phar /usr/local/bin/composer

# Install WP-CLI
RUN curl -O https://raw.githubusercontent.com/wp-cli/builds/gh-pages/phar/wp-cli.phar \
  && chmod +x wp-cli.phar \
  && mv wp-cli.phar /usr/local/bin/wp

# # Set the working directory
# WORKDIR /tmp
#
# # Clone the Sage theme
# RUN composer create-project roots/sage sage dev-main
#
# # Navigate to the theme directory
# WORKDIR /tmp/sage
#
# # Install Acorn
# RUN composer require roots/acorn
#
# # RUN wp acorn acorn:install
# RUN sed -i '/"scripts": {/a \ \ \ \ "post-autoload-dump": [ "Roots\\\\Acorn\\\\ComposerScripts::postAutoloadDump" ],' composer.json
#
# RUN yarn install && yarn build
#
# RUN cp -r /tmp/sage/ /var/www/html/wp-content/themes/
#
# WORKDIR /var/www/html
# RUN rm -rf /tmp/*

COPY ./wordpress_docker/install_sage.sh /usr/local/bin/
RUN chmod +x /usr/local/bin/install_sage.sh
RUN install_sage.sh
# RUN chown -R www-data:www-data /var/www/html/wp-content/themes/sage
