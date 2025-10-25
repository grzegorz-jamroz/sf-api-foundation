<?php

require_once dirname(__DIR__) . '/vendor/autoload.php';

error_reporting(E_ALL);

set_error_handler(function ($severity, $message, $file, $line) {
    throw new ErrorException($message, 0, $severity, $file, $line);
});

define('ABSPATH', dirname(__DIR__));
define('TESTS_DATA_DIRECTORY', ABSPATH . '/tests/data');
define('TEMPORARY_DATA_DIRECTORY', ABSPATH . '/var/temp');
