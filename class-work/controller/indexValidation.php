<?php

session_start();

header('content-type: application/json');   

$datafile = "../view/data.json";

$name ="";
$email = "";
$website = "";
$comment ="";
$gender=""; 
$nameErr = $emailErr = $websiteErr = $genderErr = "";

$response = [];

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];

    if(empty($name)){
        $nameErr = "Name is required";
    }
    elseif(!preg_match("/^[a-zA-Z ]+$/", $name)){
        $nameErr = "Only letters and white space allowed";
    }
    else{
        echo "User Name: ".$name;
    }
   
    $email = $_POST["email"];
    if(empty($email)){
        $emailErr = "E-mail is required";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid email format";
    }
    else{
        echo "Email: ".$email;  
    }

    $website = $_POST["website"];   
    if(!empty($website) && !filter_var($website, FILTER_VALIDATE_URL)){
        $websiteErr = "Invalid URL";
    }
    else{
        echo "Website: ".$website;
    }   

    $comment = $_POST["comment"];   

    if(empty($_POST["gender"])){
        $genderErr = "Gender is required"; 
    }
    else{
        $gender = $_POST["gender"];
    }

    if(empty($nameErr) && empty($emailErr) && empty($websiteErr) && empty($genderErr)){
        $_SESSION["name"] = $name;
        setcookie("name", $name, time()+3600, "/");
        setcookie("email", $email, time()+3600, "/");
        setcookie("website", $website, time()+3600, "/");
        setcookie("comment", $comment, time()+3600, "/");
        setcookie("gender", $gender, time()+3600, "/");

    }
}
if(isset($_SESSION["name"]) || isset($_COOKIE["name"])){
    echo "Welcome Back";
}
else{
    echo "please submit the form";
}
?>
