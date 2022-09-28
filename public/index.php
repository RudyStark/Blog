<?php

use App\Controller\TestController;

require(dirname(__DIR__) . '/vendor/autoload.php');

$controller = new TestController;

$controller->hello();
