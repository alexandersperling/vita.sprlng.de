#!/bin/sh

CURRENT_DIR=$(pwd)

docker run -d -p 80:8082 -v "$CURRENT_DIR"/src/:/var/www/vita.sprlng.de vita
