<?php

namespace CMS\Controller;

use Engine\Controller;

class CmsController extends Controller
{
    /**
     * CmsController constructor.
     * @param \Engine\DI\DI $di
     */
    public $data = [];
    
    public function __construct($di)
    {
        parent::__construct($di);
    }
}