<?php
namespace CMS\Classes;

class Post
{
    protected static $store;
    
    public static function setStore($store) 
    {
        self::$store = $store;
    }
    
    public static function getStore() 
    {
        return self::$store;
    }
    
    public static function title() 
    {
        echo static::$store->title;
    }
    
    public static function content()
    {
        echo static::$store->content;
    }

        public static function image()
    {
        echo static::$store->image;
    }
}