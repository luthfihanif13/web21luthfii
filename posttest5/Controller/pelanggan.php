<?php

class pembeli
{
    public $pembeli;
    public $pdo;

    public function __construct()
    {
        $host = "localhost";
        $database = "market";
        $user = "root";
        $password = "";

        $this->pdo = new PDO("mysql:host={$host}; dbname={$database}", $user, $password);
    }

    public function getAll()
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "SELECT * FROM pembeli";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll();
        return $result;
    }

    public function addpembeli($nama_pembeli, $email, $no_hp, $alamat)
    {
        $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = "INSERT INTO pembeli (nama_pembeli, email, no_hp, alamat) 
                VALUES ('".$nama_pembeli."', '".$email."', '".$no_hp."', '".$alamat."')";
        $stmt = $this->pdo->prepare($query);
        $stmt->execute();
        return $stmt->rowCount();

    }
}




?>