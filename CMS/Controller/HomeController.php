<?php

namespace CMS\Controller;

class_alias('CMS\\Classes\\Page', 'Page');

class HomeController extends CMSController
{
    public function index()
    {
        $this->load->model('Post');
        
        $this->data['posts'] = $this->model->post->getPosts();
        
        $this->data['menuId'] = 1; 

        $this->view->render('mainPage', $this->data);
    }

    public function news($id)
    {
        echo $id;
    }
}