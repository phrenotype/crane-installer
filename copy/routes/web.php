<?php

// Routes for regular web pages

use controllers\web\PagesController;

/*

$app->get("/", [WebController::class, 'method']);

$app->get("/", function($request, $response){
    return $response->respond("CRANE");
});

*/

$app->get("/", [PagesController::class, 'index']);