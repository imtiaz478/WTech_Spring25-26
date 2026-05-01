<?php
class db{
    function connection()
    {
        $this->connection = new mysqli("localhost", "root", "", "users");

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }   

        return $this->connection;
        
    }

    function signup($username , $email, $password, $website, $gender){
        $sql = "INSERT INTO users (username, email, password, website, gender)
                VALUES ('$username', '$email', '$password', '$website', '$gender')";

        return $this->connection->query($sql);
    }

    function login($email, $password){
        $sql = "SELECT * FROM `users` WHERE email='$email' AND password='$password'";
        $result = $this->connection->query($sql);

        if($result && $result->num_rows > 0){
            $user = $result->fetch_assoc(); 

            if(password_verify($password, $user['password'])){
                return true; 
            }   
        }

        return false;
       


    }
}
?>