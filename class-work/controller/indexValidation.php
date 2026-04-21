<?php

$name ="";
$email = "";
$website = "";
$comment ="";
$gender=""; 

if($_SERVER["REQUEST_METHOD"] == "POST"){
    $name = $_POST["name"];

    if(empty($name)){
        $name = "Name is required";
    }
    elseif(!preg_match("/^[a-zA-Z ]+$/", $name)){
        $name = "Only letters and white space allowed";
    }
    else{
        echo "User Name: ".$name;
    }
   
    $email = $_POST["email"];
    if(empty($email)){
        $email = "E-mail is required";
    }
    elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email = "Invalid email format";
    }
    else{
        echo "Email: ".$email;  
    }

    $website = $_POST["website"];   
    if(!empty($website) && !filter_var($website, FILTER_VALIDATE_URL)){
        $website = "Invalid URL";
    }
    else{
        echo "Website: ".$website;
    }   

    $comment = $_POST["comment"];   

    if(empty($_POST["gender"])){
        $gender = "Gender is required"; 
    }
    else{
        $gender = "";
    }



   
}
?>
