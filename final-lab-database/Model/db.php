<?php
class db{
    function connection()
    {
        $this->connection = new mysqli("localhost", "root", "", "users");

        if ($this->connection->connect_error) {
            die("Connection failed: " . $this->connection->connect_error);
        }   
        
    }

    function signup($username , $email, $password, $website, $gender){
        $sql = "INSERT INTO `users` (`username`, `email`, `password`, `website`, `gender`) VALUES ('$username', '$email', '$password', '$website', '$gender')"; 

        return $this->connection->query($sql);
    }
}
?>