<?php
include_once 'Request.php';
include_once 'Response.php';
include_once 'Route.php';


        $router = new Router(new Request);
        $router->get('/', 'text');


?>