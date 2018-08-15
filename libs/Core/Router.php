<?php
declare(strict_types=1);

namespace libs\Core;

use libs\Core\Request as Request;

class Router 
{
    private $url;
    private $controller;
    private $function;
    
    function __construct() 
    {
        $url = '';
        if(isset($_GET['url'])){
            $url = $_GET['url'];
        }
       
        if(!empty($url) && $url[strlen($url)-1] === '/'){
            $url = substr($url,0,strlen($url)-1);
        }
        
        $this -> url = $url;
        $this->getRoute();
        $this->checkPost();
        $this->loadController();    
    }
    
    private function getRoute()
    {
        require 'routes.php'; // $_ROUTES
        $request = explode('/', $this->url);
        $routes = $this->prepareRoutes($_ROUTES,$request);
        $url = $this->url;
        foreach($routes as $route){
            $allOK = true;
            if($url !== ''){
                for($i=0;$i<count($request);$i++) {
                    
                    if(array_key_exists("1", $route) && $route[$i][0] == '{' && $route[$i][1] == ':' && $route[$i][strlen($route[$i])-1] == '}'){
                        $name = substr($route[$i],2,strlen($route[$i])-3);        
                        Request::addGet($name,$request[$i]);
                        continue;
                    }
                    if($request[$i] != $route[$i]){
                        $allOK = false;
                    }
                }
            }
            
            if($allOK){
                $this->controller = $route['controller'];
                $this->function = $route['function'];
                return true;
            }
            else{
                Request::clearGet();
            }
        }
        
        throw new \Exception("This url doesn't exist!");
    }
    
    private function prepareRoutes($_ROUTES,$request)
    {
        foreach($_ROUTES as $url => $function){
            $route = explode('/',$url);
            if(count($route) != count($request)){
                continue;
            }
            
            $method = explode('@',$function);
            $route['controller'] = $method[0];
            $route['function'] = $method[1];
            
            $routes[] = $route;
        }
        return $routes;
    }
    
    private function checkPost()
    {
        Request::clearPost();
        if($_SERVER['REQUEST_METHOD'] === 'POST'){
            foreach($_POST as $key => $row){
                  Request::addPost($key, $row);
            }
        }
    }
    
    private function loadController()
    {
        $controller = "Controller\\".$this -> controller;
        new $controller($this -> function); 
        return true;
    }
}