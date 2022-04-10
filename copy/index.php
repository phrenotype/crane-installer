<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use Crane\FileSystem\Module;
use Crane\Router\App;
use Q\Orm\SetUp;

SetUp::main();

$app = new App($_REQUEST, $_SERVER);

$app->displayErrors(true);
$app->logErrors(true);
$app->startSession('Session9563ewqe1e16e5a789db64819739ae');
$app->timezone('Africa/Lagos');

$app->static('public');

// Controllers must come before routes
Module::import('controllers');

Module::import('routes');
Module::import('forms');


$app->run($_SERVER['REQUEST_URI']);
