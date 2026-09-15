<?php

// Set folder storage/cache sementara ke /tmp Vercel
$_ENV['APP_CONFIG_CACHE'] = '/tmp/config.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/services.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/packages.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/routes.php';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';

// Panggil file public/index.php Laravel
require __DIR__ . '/../public/index.php';