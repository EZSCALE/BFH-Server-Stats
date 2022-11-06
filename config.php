<?php

if (!isset($_SERVER['DB_PORT'])) {
    $_SERVER['DB_PORT'] = 3306;
}

// DATABASE INFORMATION
DEFINE('HOST', $_SERVER['DB_HOST']);
DEFINE('PORT', $_SERVER['DB_PORT']);
DEFINE('NAME', $_SERVER['DB_DATABASE']);
DEFINE('USER', $_SERVER['DB_USERNAME']);
DEFINE('PASS', $_SERVER['DB_PASSWORD']);

// CLAN NAME
$clan_name = $_SERVER['APP_NAME'];

// PAGE BANNER
$banner_image = './common/images/battlefield-hardline-banner.jpg';

// BANNER LINK
$banner_url = $_SERVER['APP_URL'];
