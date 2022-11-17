<?php


require_once(__DIR__ . '/../src/config/config.php');

$uri = urldecode(
    parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
);

if($uri === '/' ||$uri === '' || $uri === '/index.php') {
    $uri = '/day_records';
}

require_once(CONTROLLER_PATH . "{$uri}.php");

