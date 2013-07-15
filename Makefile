

SRC = vendor/vmware/vcloud-sdk/library/
OUT = library/

all: composer.lock config.mk
	find "$(SRC)" -name *.php -type f | while read filename; do \
		scripts/split.php "$$filename" "$(OUT)" || exit 1; \
	done

composer.lock: composer.phar
	php composer.phar install

composer.phar:
	curl -sS https://getcomposer.org/installer | php

test:
	cd tests && make

update: composer.phar
	php composer.phar update
