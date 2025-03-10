<?php
require_once __DIR__ . '/../vendor/autoload.php';
use App\Config;

// Retrieve an instance of Config
$config = Config::getInstance();

echo 'Database Host: ' . $config->get('db')['host'] . PHP_EOL;

$config2 = Config::getInstance();

if ($config === $config2) {
    echo 'Both instances are identical.' . PHP_EOL;
} else {
    echo 'Instances are different.' . PHP_EOL;
}