<?php

$name ="";
$password ="";
$validpassword = "";
$email = "";

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $password = $_POST["password"]; 
    $email = $_POST["email"];

    $name = $_REQUEST["name"];
    $password = $_REQUEST["password"];  
    $email = $_REQUEST["email"];

    if(!empty($name) && strlen($name)>5){
        echo "User Name: ".$name;
    }
}
?>
