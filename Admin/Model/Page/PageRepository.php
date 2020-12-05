<?php

namespace Admin\Model\Page;

use Engine\Model;

class PageRepository extends Model
{
    public function getPages()
    {
        $sql = $this->queryBuilder->select()
            ->from('page')
            ->orderBy('id', 'DESC')
            ->sql();

        return $this->db->query($sql);
    }

    public function getPageData($id)
    {
        $page = new Page($id);

        return $page->findOne();
    }

    public function getPageBySegment($segment)
    {
        $sql = $this
            ->queryBuilder
            ->select()
            ->from('page')
            ->where('segment', $segment)
            ->limit(1)
            ->sql()
        ;
        
        $result = $this->db->query($sql, $this->queryBuilder->values);
        
        return isset($result[0]) ? $result[0] : false;
    }
    /**
     * @param $params
     * @return mixed
     */
    public function createPage($params)
    {
        $page = new Page;
        $page->setSegment($params['segment']);
        $page->setTitle($params['title']);
        $page->setContent($params['content']);
        //$page->setType('');//$params['type']);
        $pageId = $page->save();

        return $pageId;
    }

    public function updatePage($params)
    {
        if (isset($params['page_id'])) {
            $page = new Page($params['page_id']);
            $page->setSegment($params['segment']);
            $page->setTitle($params['title']);
            $page->setContent($params['content']);
            $page->setType('');//$params['type']);
            $page->save();
        }
    }
}