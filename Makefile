

SRC = vendor/vmware/vcloud-sdk/library/
OUT = library/
PATCH = scripts/patches/*.patch

all: composer.lock
	find "$(SRC)" -name *.php -type f | while read filename; do \
		scripts/split.php "$$filename" "$(OUT)" || exit 1; \
	done
	make patch

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
		patch -p1 < "$$patch"; \
	done
