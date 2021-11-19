<?php
require_once (dirname(__FILE__)).'/../Part F/database_connection.php';

// creating new posts
functio create($title, $body){
    // instance of post class
    $post = new Post;

    //run query
    $runQuery = $post - > create ($title, $body);

    //if query was succesful
    if($runQuery){
        return $runQuery;
    }else{
        return false;
    }

}