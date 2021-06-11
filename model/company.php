<?php
class Company {
    // Properties
    public $id;
    public $name;
    public $email;
    public $motepass;
    public $phone;
    public $about;
    public $image;
    
    public function __construct($arr = null) {
        if($arr != null){
            $this->name = $arr["name"];
            $this->email = $arr["email"];
            $this->motepass = $arr["motepass"];
            $this->phone = $arr["phone"];
            $this->about = $arr["about"];
            $this->image = $arr["image"];
        }

    }


    public function loock_for($email, $mote){
       
        $pdo = require 'connection.php';
        $sql = "SELECT * FROM companies WHERE email = ? and motepass = ? ";

        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$email, $mote]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
        while ($row = $stmt->fetch()) {
            $this->id = $row['id'];
            $this->name = $row['name'];
            $this->email = $row['email'];
            $this->motepass = $row['motepass'];
            $this->phone = $row['phone'];
            $this->about = $row['about'];
            $this->image = $row['image'];
            return true;
        }
        return false;

    }

    public function look_for_undefined($column, $value){

        $pdo = require 'connection.php';
        $sql = "SELECT * FROM companies WHERE ".$column." = ? ";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$value]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
        while ($row = $stmt->fetch()) {
            $this->id = $row['id'];
            $this->name = $row['name'];
            $this->email = $row['email'];
            $this->motepass = $row['motepass'];
            $this->phone = $row['phone'];
            $this->about = $row['about'];
            $this->image = $row['image'];
            return true;
        }
        return false;        
    }

    public function save_dataBase(){
        try{
            $pdo = require 'connection.php';
            $sql = "INSERT INTO companies (name, email, motepass, phone, about, image) VALUES (?,?,?,?,?,?)";
            $stmt= $pdo->prepare($sql);
            $pdo->beginTransaction();
            $stmt->execute([$this->name, $this->email, $this->motepass, $this->phone, $this->about, $this->image]);
            $pdo->commit();
            
            $this->look_for_undefined("email", $this->email);

        }catch(Exception $e){
            $pdo->rollback();
            return false;
        }
        return true;

    }
    public function ToString(){
       echo $this->id ."<br>";
       echo $this->name ."<br>";
       echo $this->email ."<br>";
       echo $this->motepass ."<br>";
       echo $this->phone ."<br>";
       echo $this->about ."<br>";
       echo $this->image ."<br>";
       echo "ok";

    }
  
}
?>