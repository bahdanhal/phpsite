<?php 

namespace Engine;

class Cms
{
    /**
     * 
     * @var di
     */
    private $di;
    
    public $router;
    
    /**
     * cms constructor
     * @param $di
     */
    public function __construct($di)
    {
        $this->di = $di;
        $this->router = $this->di->get('router');
    }
    
    public function run()
    {
        $this->router->add('home', '/', 'HomeController:index');
        $this->router->add('product', '/product/{id}', 'ProductController:index');
        print_r($this->di);
    }
        
}
?>