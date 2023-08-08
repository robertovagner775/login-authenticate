<?php

namespace app\core;

class Router {

    private $routes = [];

    public function load(string $controller, string $action)
    {
        $controllerNamespace = "app\\controller\\{$controller}";
        var_dump($controller);
    }

    public function setRoute(string $routeCaminho, string $controllerName, string $method)
    {
        if($method == "POST"){
            $routes = [
                "POST" => [
                    $routeCaminho => $this->load($controllerName, "index"),
                ],
            ];
        } else {
            $routes = [
                "GET" => [
                    $routeCaminho => $this->load($controllerName, "index"),
                ],
            ];
        }
    }

    


}

?>