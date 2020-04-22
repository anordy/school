<?php


require "Router.php";

$routes = require("routes.php");

$router = new Router();

$router->route($routes);