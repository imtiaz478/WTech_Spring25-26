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

    

    $name = $_REQUEST["name"];
    $password = $_REQUEST["password"];  
    $email = $_REQUEST["email"];

    if(!empty($name) && strlen($name)>5){
        echo "User Name: ".$name;
    }
    else{
        $name = "User Name is required and must be more than 5 characters";
    }

    if(!empty($password) && strlen($password)>8){
        $validpassword = $password;
        echo " Password: ".$validpassword;
    }
    else{
        $validpassword = "Password is required and must be more than 8 characters";
    }   

    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo " Email: ".$email;
    }
    else{
        $email = "Email is required and must be a valid email address";
    }
}
?>
