<?php

namespace Engine\Service;

abstract class AbstractProvider
{
    /**
     * 
     * @var
     */
    protected $di;
    
    /**
     * 
     * @param \engine\DI\DI $di
     */
    public function __construct(\engine\DI\DI $di)
    {
        $this->di = $di;
    }
    
    /**
     * 
     */
    abstract function init();
}