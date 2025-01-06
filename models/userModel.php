<?php
include_once('config/database.php');

class UserModel
{
    private $conn;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    //Insert new user
    public function registerUser($name, $email, $phone, $password)
    {
        $sql = "INSERT INTO users (name, email, phone, password) VALUES (?, ?, ?, ?)";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("ssss", $name, $email, $phone, $password);
        if ($statement->execute()) {
            return true;
        } else {
            die ("Execute failed". $statement->error);
        }
    }

    public function getUser($email)
    {
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            return false;
        }

        $sql = "SELECT * FROM users WHERE email = ? LIMIT 1";
        $statement = $this->conn->prepare($sql);

        if ($statement) {
            $statement->bind_param("s", $email);
            $statement->execute();
            $result = $statement->get_result();

            if ($result && $result->num_rows > 0) {
                return $result->fetch_assoc();
            }
            
            return false;
        } 
        return false; 

    }

    public function getAllUsers(){
        $sql = "SELECT * FROM users";
        $statement = $this->conn->prepare($sql);
        $statement->execute();
        $result =  $statement->get_result();
        $data = [];
        while ($row = $result->fetch_assoc()) {

            $data[] = $row;
        }
        return $data;
      
    }

    public function getUserById($id) {
        $sql = "SELECT name, phone, email FROM users WHERE id = ?";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("i", $id);
        $statement->execute();
        $result = $statement->get_result();
        return $result->fetch_assoc();
    }

    public function deleteUser($id) {
        $sql = "DELETE FROM users WHERE id = ?";
        $statement = $this->conn->prepare($sql);
        $statement->bind_param("i", $id);
        return $statement->execute();
    }


}



?>