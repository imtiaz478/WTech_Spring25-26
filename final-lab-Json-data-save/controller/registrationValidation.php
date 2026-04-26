<?php
session_start();
header('content-type: application/json');   

$datafile = "../data.json";

$response = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];
    $email = $_POST["email"];   
    $website = $_POST["website"];   
    $comment = $_POST["comment"];
    $gender = $_POST["gender"];

    if(empty($name) || empty($email) || empty($gender)){
        echo json_encode([
            "status" => "error",
            "message" => "Please fill in all required fields."
        ]);
        exit();
    }

    $formdata = [
        "name" => $name,    
        "email" => $email,  
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
}
?>