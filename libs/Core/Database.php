<?php

namespace libs\Core;

class Database 
{
    private $connection = null;
    
    public function __construct() 
    {
        $this->connectDatabase();
    }
    
    private function connectDatabase()
    {
        require 'config.php';
       
        try{
            $this -> connection = $this -> pdo = new \PDO('mysql:host='.$db_host.';dbname='.$db_name.';encoding=utf8', $db_user, $db_pass);
            
            $this -> connection -> query ('SET NAMES utf8');
            $this -> connection -> query ('SET CHARACTER_SET utf8_unicode_ci');
            $this -> connection -> setAttribute(\PDO::ATTR_DEFAULT_FETCH_MODE, \PDO::FETCH_ASSOC);
        }catch (Exception $e) {
            echo '</br></br></br>';
            echo $e -> getMessage();
        }
    }
    
    public function getConnection()
    {
        return $this->connection;
    }
}
