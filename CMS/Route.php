<?php
/**
 * List routes
 */

$this->router->add('home', '/', 'HomeController:index');
$this->router->add('page', '/page/(segment:str)/', 'PageController:show');
