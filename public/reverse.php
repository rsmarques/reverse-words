<?php

// autoloader
require __DIR__ . '/../vendor/autoload.php';

if (!isset($argv[1])) {
    // did not receive argument
    http_response_code(500);
    echo "ERROR - did not receive string argument.\n";
    return;
}

echo StringHandler::create($argv[1])->reverseWords() . "\n";
