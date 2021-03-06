<?php

namespace CMS\Model\Page;

use Engine\Core\Database\ActiveRecord;

class Page
{
    use ActiveRecord;

    protected $table = 'page';

    public $id;

    public $title;

    public $content;
    
    public $segment;
    
    public $type;

    public $date;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getContent()
    {
        return $this->content;
    }

    /**
     * @param mixed $content
     */
    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getSegment()
    {
        return $this->segment;
    }
    
    
    public function setSegment($segment)
    {
        $this->segment = $segment;
    }

    public function getType()
    {
        return $this->type;
    }
    
    
    public function setType($type)
    {
        $this->type = $type;
    }
    
    /**
     * @return mixed
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * @param mixed $date
     */
    public function setDate($date)
    {
        $this->date = $date;
    }
}