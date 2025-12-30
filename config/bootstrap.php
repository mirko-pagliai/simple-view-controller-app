<?php
declare(strict_types=1);

use josegonzalez\Dotenv\Loader;

// Define directory separator for cross-platform compatibility
if (!defined('DS')) {
    define('DS', DIRECTORY_SEPARATOR);
}

// Define the root directory of the project
if (!defined('ROOT')) {
    define('ROOT', dirname(__DIR__));
}

require ROOT . '/vendor/autoload.php';

const CONFIG = ROOT . DS . 'config';
const TEMPLATES = ROOT . DS . 'templates';

// Load `.env` file if it exists
$envFile = CONFIG . '/.env';

if (is_file($envFile)) {
    (new Loader($envFile))
        ->parse()
        ->putenv(true)
        ->toEnv(true);
}
