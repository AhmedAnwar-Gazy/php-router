<?php

namespace core;


class Routers
{
    protected $routes = [];

    public function add($method, $uri, $controller)
    {
        $this->routes[] = [
            'uri' => $uri,
            'controller' => $controller,
            'method' => strtoupper($method)
        ];
    }


    public function get($uri, $controller)
    {
        $this->add("GET", $uri, $controller);
    }


    public function post($uri, $controller)
    {
        $this->add("POST", $uri, $controller);
    }


    public function put($uri, $controller)
    {
        $this->add("PUT", $uri, $controller);
    }


    public function delete($uri, $controller)
    {
        $this->add("DELETE", $uri, $controller);
    }


    public function patch($uri, $controller)
    {
        $this->add("PATCH", $uri, $controller);
    }


    public function route($uri, $method)
    {
        foreach ($this->routes as $route) {
            if ($route['uri'] == $uri && $route['method'] == strtoupper($method)) {
                require $route['controller'];
                return;
            }
        }
        abort(404);
    }




    //     function routeToControler($uri,$routes)
    // {
    //     if (array_key_exists($uri, $routes)) {
    //         http_response_code(200);

    //         require $routes[$uri];
    //     } else {
    //         abort(404);
    //     }
    // }


}
