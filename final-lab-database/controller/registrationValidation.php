<?php
include "../Model/db.php";  
  




if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];   
    $password = $_POST["password"];
    $website = $_POST["website"];   
    $comment = $_POST["comment"];
    $gender = $_POST["gender"];

    if(empty($name) || empty($email) || empty($gender) || empty($password)){
        echo "All required fields must be filled out."; 
        exit();
    }

    $database = new db();   

    $connection = $database->connection();

    $result = $database->signup($name, $email, $password, $website, $gender, $comment);

    if($result){
        Header("Location: ../view/login.php");  
    }
    else{
        echo "Error: " . $connection->error;    
    }

    
}
?>