<?php
require (__DIR__ . "/database_credentials.php");

//Create Connection.
$connect = new mysqli (servername, username, password, dbname);

//Test Connection
if ($connect->connect_error){
    die("Connection failed: ". $connect->connect_error);
    echo "Connection failed";    
}

else{
    echo "Connection succesful";
}

$connect->close();
?>
