<?php
session_start();    
include "../Model/db.php";  


if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"]; 

    $obj = new db();    
    $connection = $obj->connection();
    $result = $obj->login($username, $password);  

    if($result){
       Header("Location: ../view/dashboard.php");    
    }
    else{
        echo "Login failed. Please check your credentials.";    
    }
}

?>