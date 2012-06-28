<?php

require_once __DIR__  . '/../vendor/autoload.php';

use Symfony\Component\ClassLoader\UniversalClassLoader;

$autoloader = new UniversalClassLoader();
$autoloader->register();
