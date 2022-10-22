<?php


require_once(__DIR__ . '/../src/config/config.php');

$uri = urldecode($_SERVER['REQUEST_URI']);

if($uri === '/' ||$uri === '') {
    $uri = '/login';
}

require_once(CONTROLLER_PATH . "{$uri}.php");

// require_once(__DIR__ . '/teste.php');

