

SRC = vendor/vmware/vcloud-sdk/library/
OUT = library/
PATCH = scripts/patches/*.patch

all:
	make split
	make patch

split: composer.lock
	find "$(SRC)" -name *.php -type f | while read filename; do \
		php scripts/split.php "$$filename" "$(OUT)" || exit 1; \
	done


composer.lock: composer.phar
	php composer.phar install

composer.phar:
	curl -sS https://getcomposer.org/installer | php

test: composer.lock config.mk
	cd tests && make

update: composer.phar
	php composer.phar update

patch:
	ls scripts/patches/*.patch | while read patch; do \
		echo ==================== $$patch ====================; \
		patch --forward --reject-file=- --strip=1 < "$$patch"; \
	done || echo -n ""
