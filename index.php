<?php

require_once "Route.php";

Router::route('first.php', function($category, $id){
    print $category . ':' . $id;
  });
  Router::execute($_SERVER['REQUEST_URI']);
?>