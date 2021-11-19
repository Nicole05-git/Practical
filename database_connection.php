<?php
require("database_credentials.php");

class Databse{
    // properties
    public $db = null;
    public $results = null;

    public function connecct(){ // connects to database
       $this -> db =  mysqli_connect(servername, username, password, dbname); // this -- to refer to any property within a class

       //test the connection
       if(mysqli_connect_errno()){
           return false;
       }else{
           return true;
       }
    }

    // run query
     public function run($query){ // check if there is a connection to the database
          if(!$this -> connect()){
            return false;
        }
        elseif($this -> db == null){
            return false;
        }

        // run query
        $this -> results = mysqli_query($this -> db, $query);
        if($this -> results == false){
            return false;
        } else{
            return true;
        }
    
    }

    public function fetch(){
        //check if result is set
        if($this -> results == null){
            return false;
        }
        elseif($this -> results == false){
            return false;
        }

        //The difference between else and else if is that else doesn't need a condition as it is the default for everything where as else if is still an if so it needs a condition.
        
        return mysqli_fetch_assoc($this -> results);
    }
}