<?php

class Router
{
    protected $routes;
    public static function load($file)
    {
        $router = new Router();
        require $file;
        return $router;
    }
    public function define($routes)
    {
        $this->routes = $routes;
    }
    public function to($uri)
    {
        if (array_key_exists($uri, $this->routes)) {
            return $this->routes[$uri];
        }
        throw new Exception("No route defined for this URI.");
    }
}
