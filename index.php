<?php



$query = require "bootstrap.php";

$uri = trim($_SERVER["REQUEST_URI"], "/");

require $router->uri($uri);