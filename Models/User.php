<?php

class User extends Model
{
    public Database $db;


    public function __construct()
    {
        $this->db = new Database();
    }
    public function createAccount($name, $email, $password, $phone, $address)
    {
        $change = password_hash($password, PASSWORD_BCRYPT);

        $sql = "INSERT INTO users (name, email, password, phone_number, address) VALUES ('$name','$email','$change','$phone','$address')";
        $insert = $this->db->signUp($sql);
        return $insert;
    }
    public function SignIn($email)
    {
        $sql = "SELECT * FROM users WHERE email = " . $email;
        $result = $this->db->getUser($sql);
        return $result;
    }

    public function checkMail($email) {
        $db = new Database();
        $sql = "SELECT email FROM users WHERE email = '".$email."'";
        $result = $db->getUser($sql);
        return $result;
    }
    public function checkPass() {
        $db = new Database();
        $sql = "SELECT password FROM users";
        $result = $db->getUser($sql);
        return $result;
    }
    public function getInfoUser($email) {
        $sql = "SELECT role FROM users WHERE email = '" . $email."'";
        $result = $this->db->getUser($sql);
        return $result;
    }
    public function Id($email) {
        $sql = "SELECT id FROM users WHERE email = '" . $email."'";
        $result = $this->db->getUser($sql);
        return $result;
    }
}
