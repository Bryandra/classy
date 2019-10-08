<?php

define('SRC_DIR', __DIR__.'/../src');

require_once SRC_DIR.'/application.php';

$app = new Application();

$response = $app->run();

$response->send();