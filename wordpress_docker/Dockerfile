FROM wordpress:6.5.4-fpm-alpine

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

# Set the working directory
WORKDIR /var/www/html/wp-content/themes

# Clone the Sage theme
RUN composer create-project roots/sage sage dev-main

# Navigate to the theme directory
WORKDIR /var/www/html/wp-content/themes/sage

# Install Acorn 
RUN composer require roots/acorn

# RUN wp acorn acorn:install
RUN sed -i '/"scripts": {/a \ \ \ \ "post-autoload-dump": [ "Roots\\\\Acorn\\\\ComposerScripts::postAutoloadDump" ],' composer.json

RUN yarn install && yarn build
