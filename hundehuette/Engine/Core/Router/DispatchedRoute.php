<?php
namespace Engine\Core\Router;

class DispatchedRoute
{
    private $controller;
    private $parameters;
    /**
     * 
     * @param unknown $controller
     * @param array $parameters
     */
    public function __construct($controller, $parameters = [])
    {
        $this->controller = $controller;
        $thiis->parameters = $parameters;
    }
    
    public function getController()
    {
        return $this->controller;
    }
    
    public function getParameters()
    {
        return $this->parameters;
    }
}

