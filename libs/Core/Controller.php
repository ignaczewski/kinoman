<?php
declare(strict_types=1);

namespace libs\Core;

use libs\Core\Database as Database;

class Controller 
{
    protected $connection;
    protected $view;
    protected $function = null;
    
    function __construct(string $executeFunction = null) 
    {
        include_once __DIR__.'/../Smarty/Smarty.class.php';
        $this -> view = new \Smarty();
        
        $this->connectDatabase();
        session_start();
        
        $this -> function = $executeFunction;
        $this->autorunFunction();
    }
    
    private function connectDatabase()
    {
        $database = new Database();
        $this -> connection = $database->getConnection();
    }
    
    protected function autorunFunction()
    {
        if ($this->function != null){
            $this -> {$this -> function}();
        }
    }
}