<?php


class Router{
       private $routes = [];

       public function route($routes)
       {
           $this->routes = $routes;
       }

       public function uri($url)
       {
           if(array_key_exists($url, $this->routes))
           return $this->routes[$url];
           return "controllers/404.php";
       }
}