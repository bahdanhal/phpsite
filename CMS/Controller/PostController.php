<?php
namespace CMS\Controller;

use Admin\Model\Post\PostRepository;
use CMS\Classes\Post;

class_alias('CMS\\Classes\\Post', 'Post');

class PostController extends CMSController
{
    const TEMPLATE_PAGE_MASK = 'page_%s';
    
    public function show($id)
    {
         
        $this->load->model('Post', false, 'Admin');
        
        $postModel = $this->model->post;
        $this->data['menuId'] = 1; 
        $post = $postModel->getPostData($id);
        
        if($post === false){
            header('Location: /');
            exit;
        }
        
        $template = 'post';
        
        Post::setStore($post);
        
        $this->view->render($template, $this->data);
        
    }
    
}

