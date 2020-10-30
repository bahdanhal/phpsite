<?php
namespace Engine\Service\Router;

use Engine\Service\AbstractProvider;
use Engine\Core\Router\Router;

class Provider extends AbstractProvider
{
    /**
     *
     * @var string
     */
    public $serviceName = 'router';
    
    /**
     *
     * {@inheritDoc}
     * @see \Engine\Service\AbstractProvider::init()
     */
    public function init()
    {
        $router = new router('http://localhost/hundehuette/');
        
        $this->di->set($this->serviceName, $router);
    }
}

