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

    $formdata = [
        "name" => $name,    
        "email" => $email, 
        "password" => $password,    
        "website" => $website,
        "comment" => $comment,
        "gender" => $gender 
    ];

    if(file_exists($datafile)){
        $tempdata = json_decode(file_get_contents($datafile), true);
    }
    else {
        $tempdata = []; 
    }

    if(!is_array($tempdata)){
        $tempdata = [];
    }   

    $tempdata[] = $formdata;

    file_put_contents($datafile, json_encode($tempdata, JSON_PRETTY_PRINT));    

    echo json_encode([
        "status" => "success",
        "data" => $formdata 
    ]);

    $database = new db();   

    $connection = $database->connection();

    $result = $database->signup($name, $email, $password, $website, $gender);

    if($result){
        Header("Location: ../view/login.php");  
    }
    else{
        echo "Error: " . $connection->error;    
    }

    
}
?>