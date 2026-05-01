<?php
session_start();    
include "../Model/db.php";  

if($_SERVER["REQUEST_METHOD"] == "POST"){

    $email = $_POST["email"] ?? '';
    $password = $_POST["password"] ?? '';

    if(empty($email) || empty($password)){
        echo "Please fill all fields!";
        exit();
    }

    $obj = new db();    
    $obj->connection();

    $result = $obj->login($email, $password);  

    if($result){
       $_SESSION['email'] = $email;
       header("Location: ../view/dashboard.php");    
    }
    else{
        echo "Login failed. Please check your credentials.";    
    }
}
else{
    echo "Invalid request!";
}
?>