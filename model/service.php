<?php
class Service {
    // Properties
    public $id;
    public $name;
    public $about;
    public $prix;
    public $image;
    public $id_company;
    
    public function __construct($arr = null) {
        if($arr != null){
            $this->name = $arr["name"];
            $this->about = $arr["about"];
            $this->prix = $arr["prix"];
            $this->image = $arr["image"];
            $this->id_company = $arr["id_company"];
        }
    }


    public function look_for_undefined($column, $value){

        $pdo = require 'connection.php';
        $sql = "SELECT * FROM services WHERE ".$column." = ? ";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$value]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        
        while ($row = $stmt->fetch()) {
            $this->id = $row['id'];
            $this->name = $row['name'];
            $this->about = $row['about'];
            $this->prix = $row['prix'];
            $this->image = $row['image'];
            $this->id_company = $row["id_company"];
            return true;
        }
        return false;        
    }

    public function save_dataBase(){
        try{
            $pdo = require 'connection.php';
            $sql = "INSERT INTO services (name, about, prix, image, id_company) VALUES (?,?,?,?,?)";
            $stmt= $pdo->prepare($sql);
            $pdo->beginTransaction();
            $stmt->execute([$this->name, $this->about, $this->prix, $this->image, $this->id_company]);
            $pdo->commit();
            
            $this->look_for_undefined("name", $this->name);

        }catch(Exception $e){
            $pdo->rollback();
            return false;
        }
        return true;

    }

    public function list_seriver_desc($id){
        
        $pdo = require 'connection.php';
        $sql = "SELECT * FROM services WHERE id_company=? ";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$id]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        $data = [];
        while ( $row =  $stmt->fetch( )) {
            array_push($data,[
              "id" => $row["id"],
              "name" => $row["name"],
              "about" => $row["about"],
              "prix" => $row["prix"],
              "image" => $row["image"],
              "id_company" => $row["id_company"],
            ]);
            
        }
        return $data; 

    }

    public function delete($id){
        $pdo = require 'connection.php';
        $sql = "DELETE  FROM services WHERE id=? ";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$id]);
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        if($stmt->rowCount() != 0){
            return true;

        }
        return false; 
        

    }
    public function All(){
        $pdo = require 'connection.php';
        $sql = "SELECT * FROM services";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        $data = [];
        while ( $row =  $stmt->fetch( )) {
            array_push($data,[
              "id" => $row["id"],
              "name" => $row["name"],
              "about" => $row["about"],
              "prix" => $row["prix"],
              "image" => $row["image"],
              "id_company" => $row["id_company"],
            ]);
            
        }
        return $data; 


    }
    public function search($name){
        $pdo = require 'connection.php';
        $sql = "SELECT * FROM services WHERE name LIKE '%$name%'";
       
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute();
        } catch (Exception $e) {
            echo $e->getMessage();
        }
        $data = [];
        while ( $row =  $stmt->fetch( )) {
            array_push($data,[
              "id" => $row["id"],
              "name" => $row["name"],
              "about" => $row["about"],
              "prix" => $row["prix"],
              "image" => $row["image"],
              "id_company" => $row["id_company"],
            ]);
            
        }
        return $data; 


    }

    public function ToString(){
       echo $this->name ."<br>";
       echo $this->about ."<br>";
       echo $this->prix ."<br>";
       echo $this->image ."<br>";
       echo $this->id ."<br>";
       echo $this->id_company ."<br>";
       echo "ok";
    }
    
  
}
?>