<?php

if (file_exists(__DIR__ . '/../../../vendor/autoload.php')) {
    require __DIR__ . '/../../../vendor/autoload.php';

    $dotenv = new \Dotenv\Dotenv(__DIR__ . '/../../../');
    $dotenv->load();
} else {
    die('Failed to load');
}

// DATABASE INFORMATION
DEFINE('HOST', $_SERVER['DB_HOST']);
DEFINE('PORT', '3306');
DEFINE('NAME', $_SERVER['DB_DATABASE']);
DEFINE('USER', $_SERVER['DB_USERNAME']);
DEFINE('PASS', $_SERVER['DB_PASSWORD']);

// CLAN NAME
$clan_name = $_SERVER['APP_NAME'];

// PAGE BANNER
$banner_image = './common/images/battlefield-hardline-banner.jpg';

// BANNER LINK
$banner_url = $_SERVER['APP_URL'];
