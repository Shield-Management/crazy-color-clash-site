<div align="center">

# Crazy Color Clash

The website for the Crazy Color Clash iOS game.

[![Build](https://github.com/Justintime50/crazy-color-clash-site/workflows/build/badge.svg)](https://github.com/Justintime50/crazy-color-clash-site/actions)
[![Licence](https://img.shields.io/github/license/justintime50/crazy-color-clash-site)](LICENSE)

<img src="src/public/pics/icon.png" width=200 alt="Showcase">

</div>

## Install

```bash
# Copy the env file, edit as needed
cp src/.env-example src/.env

# Run the setup script which will bootstrap all the requirements and spin up the service
./setup.sh
```

## Usage

Visit `crazycolorclash.localhost` locally or `crazycolorclash.com` in production.

## Deploy

```bash
# Deploy the site locally
docker compose up -d

# Deploy the site in production
docker compose -f docker-compose.yml -f docker-compose-prod.yml up -d
```

## Development

```bash
# Install dependencies
composer install

# Lint the PHP files
composer lint

# Fix PHP linting
composer fix

# Lint the SASS files
npm run lint

# Fix SASS linting
npm run fix

# Compile SASS and Javascript during development (hot-reloads)
npm run dev

# Compile for production
npm run build
```
