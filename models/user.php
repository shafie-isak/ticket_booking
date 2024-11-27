<?php

class UserModel {
    private $conn;

    public function __construct($db) {
        $this->conn = $db;
    }

    //Insert new user
    public function registerUser($name, $email, $phone, $password) {
        $sql = "INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("ssss", $name, $email, $phone, $password);
        return $statement->execute();
    }
}

?>