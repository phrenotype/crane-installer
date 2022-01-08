<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Lime\FileSystem\Module;
use Lime\Router\App;
use Q\Orm\SetUp;

SetUp::main();

$app = new App($_REQUEST, $_SERVER);

$app->displayErrors(true);
$app->logErrors(true);
$app->startSession('session');

$app->static('public');



Module::import('middleware');
Module::import('routes');
Module::import('controllers');


$app->run($_SERVER['REQUEST_URI']);
