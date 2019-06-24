#!/bin/sh

for file in  $(ls src/*.php)
do
	cho "linting $file"
	php -l "$file"
done

