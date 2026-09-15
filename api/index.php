<?php

// Menesuaikan direktori penyimpanan sementara Vercel ke /tmp
$_ENV['APP_CONFIG_CACHE'] = '/tmp/config.php';
$_ENV['APP_SERVICES_CACHE'] = '/tmp/services.php';
$_ENV['APP_PACKAGES_CACHE'] = '/tmp/packages.php';
$_ENV['APP_ROUTES_CACHE'] = '/tmp/routes.php';
$_ENV['VIEW_COMPILED_PATH'] = '/tmp';

// Mengarahkan ke public/index.php bawaan Laravel
require __DIR__ . '/../public/index.php';