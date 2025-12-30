<?php
declare(strict_types=1);

use SimpleVC\Application;

require dirname(__DIR__) . '/config/bootstrap.php';

$app = new Application();
$response = $app->run();
$response->send();
