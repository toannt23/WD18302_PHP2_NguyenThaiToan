<?php 

namespace App\Core;

use App\Core\RouteNotFoundException;

class Route{
    protected array $routes;

    public function register(string $route, callable|array $action): self
    {
        //var_dump($route);
        $this->routes[$route] = $action;
        //var_dump($this->routes);
        return $this;
    }
    public function resolve(string $requesUrl){
        $route = explode('?',$requesUrl)[0];
        $action = $this->routes[$route] ?? null;
        if(!$action){
           // thorw new RouteNotFoundException();
        }

        if(is_array($action)){
            return call_user_func($action);

            if(class_exists($class)){
                $class = new $class();

                if(method_exists($class,$method)){
                    return call_user_func_array([$class,$method],[]);
                }
            }
        }
    }
}
