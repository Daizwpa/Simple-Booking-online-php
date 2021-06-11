<?php
class User {
    // Properties
    public $id;
    public $name;
    public $last_name;
    public $email;
    public $motepass;
    public $phone;
    public $image;
   
    // Methods
    function __construct($arr = null) {
        if($arr != null){
            $this->name = $arr["name"];
            $this->last_name = $arr["last_name"];
            $this->email = $arr["email"];
            $this->motepass = $arr["motepass"];
            $this->phone = $arr["phone"];
            $this->image = $arr["image"];
        }
        
    }
   
    public function loock_for($email, $mote){
       
        $pdo = require 'connection.php';
        $sql = "SELECT * FROM users WHERE email = ? and motepass = ? ";

        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$email, $mote]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
        while ($row = $stmt->fetch()) {
            $this->name = $row["name"];
            $this->last_name = $row["last_name"];
            $this->motepass = $row["motepass"];
            $this->phone = $row["phone"];
            $this->email = $row["email"];
            $this->image = $row["image"];
            $this->id = $row["id"];
            return true;
        }
        return false;
    }

    public function look_for_undefined($column, $value){
       
        $pdo = require 'connection.php';
        $sql = "SELECT * FROM users WHERE ".$column." = ? ";
        $stmt = $pdo->prepare($sql);

        try {
            $stmt->execute([$value]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
        while ($row = $stmt->fetch()) {
            $this->name = $row["name"];
            $this->last_name = $row["last_name"];
            $this->motepass = $row["motepass"];
            $this->phone = $row["phone"];
            $this->email = $row["email"];
            $this->image = $row["image"];
            $this->id = $row["id"];
            return true;
        }
        return false;
    }

    public function save_dataBase(){
        try{
            $pdo = require 'connection.php';
            $sql = "INSERT INTO users (name, last_name, email, motepass, phone, image) VALUES (?,?,?,?,?,?)";
            $stmt= $pdo->prepare($sql);
            $pdo->beginTransaction();
            $stmt->execute([$this->name, $this->last_name, $this->email, $this->motepass, $this->phone, $this->image]);
            $pdo->commit();
            $this->look_for_undefined("email", $this->email);

        }catch(Exception $e){
            $pdo->rollback();
            return false;
        }
        return true;
        

    }
    public function ToString(){
        echo $this->name ."<br>";
        echo $this->last_name ."<br>";
        echo $this->email ."<br>";
        echo $this->motepass ."<br>";
        echo $this->phone ."<br>";
        echo $this->image ."<br>";

    }
  
}
?>