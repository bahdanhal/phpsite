<?php

namespace Admin\Model\Post;

use Engine\Core\Database\ActiveRecord;

class Post
{
    use ActiveRecord;
    
    protected $table = 'post';
    
    public $id;
    
    public $title;
    
    public $subtitle;
    
    public $content;
    
    public $date;
    
    public $image;
    
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
    
    public function getSubtitle()
    {
        return $this->subtitle;
    }
    
    /**
     * @param mixed $title
     */
    public function setSubtitle($subtitle)
    {
        $this->subtitle = $subtitle;
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

    /**
     * @return string
     */
    public function getImage()
    {
        return $this->image;
    }
    
    /**
     * @param string $image
     */
    public function setImage($image)
    {
        $this->image = $image;
    }
}