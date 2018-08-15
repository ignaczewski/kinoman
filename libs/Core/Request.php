<?php
declare(strict_types=1);

namespace libs\Core;

class Request 
{
    private static $get;
    private static $post;
    
    public static function get($name = null)
    {
        if(!is_null($name)){
            if(isset(self::$get[$name])){
               return self::$get[$name]; 
            }
            else{
                throw new RequestException($name.' is not GET variable!');
            }
        }
        return self::$get;
    }
    
    public static function addGet($name, $value)
    {
        self::$get[$name] = $value;
    }
    
    public static function clearGet()
    {
        self::$get = null;
    }
    
    public static function post($name = null)
    {
        if(!is_null($name)){
            if(isset(self::$post[$name])){
               return self::$post[$name]; 
            }
            else{
                return null;
            }
        }
        return self::$post;
    }
    
    public static function addPost($name, $value)
    {
        self::$post[$name] = $value;
    }
    
    public static function clearPost()
    {
        self::$post = null;
    }
    
}
