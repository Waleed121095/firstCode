<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Database
 *
 * @author Hssnan
 */

class Database {
    private $host;
    private $user;
    private $password;
    private $database;
    
    function _constrcut($filename)
    {
        if(is_file($filename))include $filename;
        else throw new Exception ("error");
  $this->user= $user;  
  $this->host=$host;
 $this->host=$password;
  $this->database=$database;
  $this-> connect();
    }

  private function connect()
  {
      
      //connect to server
      if(!mysql_connect($this->user,$this->host,$this->host))
          throw new Exception ("can not server");
      else {
          echo "ok";   
       }
    $sql = "UPDATE `news` SET `Subject`=$EIDT WHERE 'title'=$TitleDB";

      //connect to database
      if(!mysql_select_db($this->database))
          throw  new Exception ("can not database");
       else {
          echo "ok";   
       }
       echo "<meta >";
  
}
function  close()
{
    mysql_close();
}
        
        
    
}
