
include tests/config.mk

REPORT = echo -e "\\n> SUCCESS\\n" && exit 0 || (echo -e "\\n> FAILURE\\n" && exit 1)
PARAMETERS = -h $(VCLOUD_HOST) -o $(VCLOUD_ORGANIZATION) -u $(VCLOUD_USERNAME) -p $(VCLOUD_PASSWORD) -a $(VCLOUD_API_VERSION)

DOC := docs/api
SRC = vendor/vmware/vcloud-sdk/library/
OUT = library/
PATCH = scripts/patches/*.patch

all: dependencies


# ==============================================================================
# Dependencies
# ==============================================================================

dependencies: vendor
	# ┌─────────────────────────────┐
	# │ Dependencies are up-to-date │
	# └─────────────────────────────┘

vendor: composer.phar composer.json
	[ -e composer.lock ] && php -d memory_limit=-1 composer.phar update || php -d memory_limit=-1 composer.phar install
	cd vendor/sami/sami && curl -s https://github.com/fabpot/Sami/pull/47.patch | patch -p1
	touch vendor

composer.phar:
	curl -s http://getcomposer.org/installer | php
	# ┌──────────────────────────────────────┐
	# │ Downloaded Composer in composer.phar │
	# └──────────────────────────────────────┘


# ==============================================================================
# Cleaning
# ==============================================================================

clean:
	[ ! -d vendor ] || rm -Rf vendor
	[ ! -e composer.lock ] || rm -f composer.lock
	[ ! -e composer.phar ] || rm -f composer.phar
	# ┌─────────┐
	# │ Cleaned │
	# └─────────┘


# ==============================================================================
# API Import
# ==============================================================================

split: dependencies
	find "$(SRC)" -name *.php -type f | while read filename; do \
		php scripts/split.php "$$filename" "$(OUT)" || exit 1; \
	done
	dos2unix $$(find library/ -type f -name *.php)

patch:
	ls scripts/patches/*.patch | while read patch; do \
		echo ==================== $$patch ====================; \
		(git apply --stat "$$patch" && git apply < "$$patch") || exit 1; \
		echo ; \
		sleep 1; \
	done || echo -n ""


# ==============================================================================
# Testing
# ==============================================================================

test: dependencies tests/config.mk tests/vendor \
	tests/test-require.php \
	tests/test-authentication.php \

	php tests/test-require.php        $(PARAMETERS) && $(REPORT)
	php tests/test-authentication.php $(PARAMETERS) && $(REPORT)

tests/vendor: composer.phar tests/composer.json
	cd tests \
		&& [ -e composer.lock ] \
		&& php -d memory_limit=-1 ../composer.phar update \
		|| php -d memory_limit=-1 ../composer.phar install
	touch tests/vendor

tests/config.mk:
	# ┌───────────────────────────────────────────────────────┐
	# │ Missing file tests/config.mk                          │
	# ├───────────────────────────────────────────────────────┤
	# │ Please run `cp tests/config.mk.dist tests/config.mk`  │
	# │ and edit tests/config.mk with your own configuration. │
	# └───────────────────────────────────────────────────────┘
	exit 1


# ==============================================================================
# Documentation
# ==============================================================================

doc: $(DOC)
	# ┌─────────────────────────────┐
	# │ Documentation is up-to-date │
	# └─────────────────────────────┘

$(DOC): dependencies library
	[ ! -d "$(DOC)" ] || rm -Rf "$(DOC)"
	mkdir -p "$(DOC)"
	vendor/bin/sami.php update sami.php
	touch "$(DOC)"

publish:
	git add "$(DOC)" && git commit -m "Updated API documentation"
	git subtree push --prefix "$(DOC)" origin gh-pages
