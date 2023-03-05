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
        if ! healthcheck; then
            echo "Failed healthcheck attempt #$ATTEMPT, retrying..."
            sleep 1
        else
            echo "Healthcheck passed!"
            exit 0
        fi
    done

    exit 1
}

healthcheck() {
    docker ps | grep -q crazy-color-clash-site-crazy-color-clash-1 || false
    docker exec -t crazy-color-clash-site-crazy-color-clash-1 curl -f --silent --output /dev/null http://localhost || false
}

setup
