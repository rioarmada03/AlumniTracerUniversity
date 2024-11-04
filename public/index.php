<?php

use Illuminate\Http\Request;

/**
 * Laravel - A PHP Framework For Web Artisans
 *
 * @package  Laravel
 */

// Define a constant to track when Laravel started
define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader
require __DIR__.'/../vendor/autoload.php';

// Bootstrap the Laravel application
$app = require_once __DIR__.'/../bootstrap/app.php';

// Handle the incoming request
$kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
$response = $kernel->handle(
    $request = Request::capture()
);

// Send the response to the browser
$response->send();

// Terminate the request
$kernel->terminate($request, $response);
