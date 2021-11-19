<?php
require_once (dirname(__FILE__)).'/../Part F/database_connection.php';


class Post extends Database{ // child class of database
// create
public function create($title, $body){
    $query = "INSERT INTO 'posts'(`title`, `body`) VALUES ('$title', '$body')";

    return $this -> run($query);
}
//read

// update

//delete
} 