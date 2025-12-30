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

/*
 * Environment bootstrap.
 *
 * To enable environment variables:
 * 1. Copy `config/.env.example` to `config/.env`
 * 2. Edit the `config/.env` file and set the desired values
 *
 * The `config/.env` file is optional and must not be committed.
 * If present, it is loaded and all variables are exposed as strings.
 *
 * Example:
 * ```
 * DEBUG=true
 * ```
 *
 * Type conversion is intentionally NOT handled here.
 */
$envFile = CONFIG . '/.env';
if (file_exists($envFile)) {
    $loader = new Loader($envFile);
    $loader->parse()
        ->putenv(true)
        ->toEnv(true);
}
