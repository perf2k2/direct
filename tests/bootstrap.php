<?php

require_once __DIR__ . '/../vendor/autoload.php';

spl_autoload_register(function($class) {
    if (strpos($class, 'tests') === false) {
        require_once __DIR__ . '/../src/' . str_replace(['direct', '\\'], ['', '/'], $class) . '.php';
    } else {
        require_once __DIR__ . '/../' . str_replace(['direct', '\\'], ['', '/'], $class) . '.php';
    }
});