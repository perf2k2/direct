<?php

require_once __DIR__ . '/../vendor/autoload.php';

spl_autoload_register(function($class) {
    $path = __DIR__ . '/../src/' . str_replace(['perf2k2\direct', '\\'], ['', '/'], $class) . '.php';
    require_once $path;
});