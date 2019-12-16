<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Base
 *
 * @author Khalil lahmer
 */
class Base {
    private $host='localhost' ; 
    private $username ='root' ; 
    private $password ='' ; 
    private $database='test' ; 
    private $db ; 
    public function __construct ($host = null ,$username = null , $password = null , $database = null ) {
       if ($host != null ) {
           $this->host=$host ; 
           $this->username=$username ; 
           $this->password=$password ; 
           $this->database=$database ;
       } 
       try{
           $this->db = new PDO('mysql:host='.$this->host.';dbname='.$this->database, $this->username, $this->password , array(
               PDO::MYSQL_ATTR_INIT_COMMAND =>'SET NAMES UTF8',
               PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING  ));
       } catch (PDOException $e) {
           die('impossibel') ;  

       }
        
    }

    public function query($sql ,$data = array() ){
        $req =$this->db->prepare($sql) ; 
        $req->execute($data) ; 
        return $req->fetchALL(PDO::FETCH_OBJ);
    }
}
