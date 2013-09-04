

SRC = vendor/vmware/vcloud-sdk/library/
OUT = library/
PATCH = scripts/patches/*.patch

all:
	make split
	make patch
	make docs

split: composer.lock
	find "$(SRC)" -name *.php -type f | while read filename; do \
		php scripts/split.php "$$filename" "$(OUT)" || exit 1; \
	done
	dos2unix $$(find library/ -type f -name *.php)

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
		patch --forward --reject-file=- --strip=1 < "$$patch" || exit 1; \
		echo ; \
	done || echo -n ""

clean:
	[ -d docs ] && rm -Rf docs || echo Nothing to do

docs:
	[ -d docs ] && rm -Rf docs || echo Nothing to do
	phpdoc --directory library/ --target docs --title "VMware vCloud PHP Patched SDK 5.1.2 Documentation" --template responsive
