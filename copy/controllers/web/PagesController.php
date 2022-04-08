<?php

namespace controllers\web;

use Crane\Router\Request;
use Crane\Router\Response;

class PagesController {

    public function index(Request $req, Response $resp){
        return $resp->respond('pages/home.php');
    }
}