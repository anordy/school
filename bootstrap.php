<?php


require "Router.php";
$conn = require "db/dbase.php";
require "db/QueryBuilder.php";


$querybuilder = new QueryyBuilder($conn);



$routes = require("routes.php");

$router = new Router();

$router->route($routes);

return $querybuilder;