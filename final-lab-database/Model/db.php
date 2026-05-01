<?php
class db{
    function connection()
    {
        $this->connection = new mysqli("localhost", "root", "", "userinfo");

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }   

        return $this->connection;
        
    }

    function signup($username , $email, $password, $website, $gender, $comment){
        $sql = "INSERT INTO users (Name, Email, password, Website, Gender, Comment)
                VALUES ('$username', '$email', '$password', '$website', '$gender', '$comment')";

        return $this->connection->query($sql);
    }

    function login($email, $password){
        $sql = "SELECT * FROM users WHERE Email='$email' AND password='$password'";
        $result = $this->connection->query($sql);

        return $result->num_rows > 0;
    
       


    }
}
?>