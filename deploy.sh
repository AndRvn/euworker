#!/bin/bash

echo "pull master..."
git pull origin master

echo ""
echo "composer install..."
composer install
