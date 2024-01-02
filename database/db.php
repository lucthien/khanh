<?php

// Database credentials
class Database
{

    // public \PDO $pdo;
    // public static Database $db;
    public \PDO $pdo;
    public function __construct()
    {

        try {
            // Create a PDO instance
            $this->pdo = new PDO("mysql:host=localhost; dbname=db_khanh", 'root', '');

            // Set the PDO error mode to exception
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "connected successfully <br>";
            // You are now connected to the database, and you can perform database operations here.

        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }

    public function getMenu($select)
    {
        $result = $this->pdo->query($select)->fetchAll();
        return $result;
    }
    public function getProduct($select)
    {
        $result = $this->pdo->query($select)->fetchAll();
        return $result;
    }
    public function getIdProduct($e)
    {
        $result = $this->pdo->query($e)->fetchAll();
        return $result;
    }
    public function getIdMenu($e)
    {
        $result = $this->pdo->query($e)->fetchAll();
        return $result;
    }
    public function category($e)
    {
        $result = $this->pdo->query($e)->fetchAll();
        return $result;
    }
    public function cart($e)
    {
        $result = $this->pdo->query($e)->fetchAll();
        return $result;
    }

    public function countId($select)
    {
        $result = $this->pdo->query($select)->fetchColumn();
        return $result;
    }
    public function signUp($insert)
    {
        $result = $this->pdo->query($insert);
        return $result;
    }
    public function getUser($select)
    {
        $result = $this->pdo->query($select)->fetchColumn();
        return $result;
    }
    public function Invoice($insert) {
        $result = $this->pdo->query($insert);
        return $result;
    }
}
