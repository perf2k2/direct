<?php
require_once __DIR__ . '/../vendor/autoload.php';

use Composer\Autoload\ClassLoader;

$classLoader = new ClassLoader();
$classLoader->addPsr4("perf2k2\\direct\\tests\\", __DIR__, true);
$classLoader->register();