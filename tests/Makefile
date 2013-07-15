include config.mk

REPORT = echo -e "\\n> SUCCESS\\n" || echo -e "\\n> FAILURE\\n"
PARAMETERS = -h $(VCLOUD_HOST) -o $(VCLOUD_ORGANIZATION) -u $(VCLOUD_USERNAME) -p $(VCLOUD_PASSWORD)

all: composer.lock config.mk
	php test-require.php				$(PARAMETERS) && $(REPORT)
	php test-authentication.php $(PARAMETERS) && $(REPORT)

composer.lock: composer.phar
	php composer.phar install

composer.phar:
	curl -sS https://getcomposer.org/installer | php

config.mk:
	echo "YOU NEED TO CREATE A FILE config.mk CONTAINING YOUR VCLOUD DIRECTOR CONFIG. SEE config.mk.txt"

update: composer.phar
	php composer.phar update
