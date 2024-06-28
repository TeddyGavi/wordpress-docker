#!/bin/bash

set -e # Exit immediately if a command fails

# echo "Checking for Sage installation..."

if [ ! -d "/var/www/html/wp-content/themes/sage" ]; then
	echo "Sage not found. Installing..."

	mkdir -p /tmp
	cd /tmp
	# cd /var/www/html/wp-content/themes

	composer create-project roots/sage sage dev-main
	cd /tmp/sage
	# cd /var/www/html/wp-content/themes/sage

	yarn cache clean
	yarn config set cache-folder "/tmp/.yarn-cache"
	composer require roots/acorn
	# composer config --json extra.scripts.post-autoload-dump "Roots\\Acorn\\ComposerScripts::postAutoloadDump"
	sed -i '/"scripts": {/a \ \ \ \ "post-autoload-dump": [ "Roots\\\\Acorn\\\\ComposerScripts::postAutoloadDump" ],' composer.json
	yarn install && yarn build

	# rm -rf /var/www/html/wp-content/themes/sage
	cp -r /tmp/sage /var/www/html/wp-content/themes/sage

	# Clean up temporary files
	rm -rf /tmp/sage

	echo "Sage installed successfully!"
else
	echo "Sage already installed. Skipping..."
fi
