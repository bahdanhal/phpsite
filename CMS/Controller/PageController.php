<?php
namespace CMS\Controller;

use Admin\Model\Page\PageRepository;
use CMS\Classes\Page;

class_alias('CMS\\Classes\\Page', 'Page');

class PageController extends CMSController
{
    const TEMPLATE_PAGE_MASK = 'page_%s';
    
    public function show($segment)
    {
         
        $this->load->model('Page', false, 'Admin');
        
        $pageModel = $this->model->page;
        $this->data['menuId'] = 1; 
        $page = $pageModel->getPageBySegment($segment);
        
        if($page === false){
            header('Location: /');
            exit;
        }
        
        $template = 'page';
        if($page->type !== 'page'){
            $template = sprintf(self::TEMPLATE_PAGE_MASK, $page->type);
        }
        
        Page::setStore($page);
        
        $this->view->render($template, $this->data);
        
    }
    
}

