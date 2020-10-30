<?php
namespace Engine\Core\Router;

class Router
{
    private $routes = [];
    private $host;
    private $dispatcher;
    
    /**
     * 
     * @param unknown $host
     */
    public function __construct($host)
    {
        $this->host = $host;
    }
    
    public function add($key, $pattern, $controller, $method = 'GET')
    {
        $this->routes[$key] = [
            'pattern'   => $pattern,
            'controller'=> $controller,
            'method'    => $method         
        ];
    }
    
    
    public function dispath($method, $uri)
    {
        
    }
    
    public function getDispatcher()
    {
        if($this->dispatcher == null){   
        }
        return $this->dispatcher;
    }
        
}

