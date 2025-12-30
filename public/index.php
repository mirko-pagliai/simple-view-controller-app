<?php
declare(strict_types=1);

use SimpleVC\Application;

require_once '../config/bootstrap.php';

$app = new Application();
$response = $app->run();
$response->send();
