#!/bin/bash

# The following script will setup the project for the first time
# To run the project in the future, simply run `docker compose up -d`

setup() {
    cd src || exit 1

    # Install dependencies
    composer install
    npm install

    # Generate a Laravel key
    php artisan key:generate

    cd .. || exit 1

    # Spin up the project (assumes you already have Traefik setup)
    docker compose up -d --build --quiet-pull

    # Run a healthcheck to ensure the container(s) are running
    for ((ATTEMPT = 0; ATTEMPT <= 10; ATTEMPT += 1)); do
        if healthcheck != 0; then
            sleep 1
        fi
        exit 0
    done
}

healthcheck() {
    docker ps | grep -q crazy-color-clash-site-crazy-color-clash-1 || exit 1
    docker exec -t crazy-color-clash-site-crazy-color-clash-1 curl -f --silent --output /dev/null http://localhost || exit 1
}

setup
