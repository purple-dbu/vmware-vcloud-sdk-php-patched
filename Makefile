

SRC = vendor/vmware/vcloud-sdk/library/
OUT = library/

all:
	find "$(SRC)" -name *.php -type f | while read filename; do \
    scripts/split.php "$$filename" "$(OUT)" || exit 1; \
	done
