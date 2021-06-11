<?php

class Reservations {
    // Propreties
    public $id;
    public $date;
    public $time;
    public $status;
    public $id_service;
    public $id_user;
    // Method
    public function __construct($arr = null){
        if($arr != null){
            $this->date = $arr["date"];
            $this->time = $arr["time"];
            $this->status = $arr["status"];
            $this->id_service = $arr["id_service"];
            $this->id_user = $arr["id_user"];
        }
    }

    public function save_dataBase(){
        try{
            $pdo = require 'connection.php';
            $sql = "INSERT INTO reservations (date, time, status, id_service, id_user) VALUES (? ,? ,? ,? ,? )";
            $stmt= $pdo->prepare($sql);
            $pdo->beginTransaction();
            $stmt->execute([$this->date, $this->time, $this->status, $this->id_service, $this->id_user]);
            $pdo->commit();
            
        }catch(Exception $e){
            $pdo->rollback();
            echo $e->getMessage() . "<br>";
            return false;
        }
        return true;

    }
    public function look_for_undefined($column, $value){

        $pdo = require 'connection.php';
        $sql = "SELECT * FROM reservations WHERE ".$column." = ? ";
        $stmt = $pdo->prepare($sql);
        try {
            $stmt->execute([$value]);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        
        while ($row = $stmt->fetch()) {
            $this->id = $row['id'];
            $this->date = $row['date'];
            $this->time = $row['time'];
            $this->status = $row['status'];
            $this->id_service = $row['id_service'];
            $this->id_user = $row["id_user"];
            return true;
        }
        return false;        
    }
    public function list_reservations($column, $id){
        $pdo = require 'connection.php';
        $sql = "SELECT * FROM reservations WHERE ".$column."=? ";
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
              "date" => $row["date"],
              "time" => $row["time"],
              "status" => $row["status"],
              "id_service" => $row["id_service"],
              "id_user" => $row["id_user"],
            ]);
            
        }
        return $data; 
    }
    public function delete($id){
        $pdo = require 'connection.php';
        $sql = "DELETE  FROM reservations WHERE id=? ";
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
    public function ToString(){
        echo $this->id ."<br>";
        echo $this->date . "<br>";
        echo $this->time . "<br>";
        echo $this->status . "<br>";
        echo $this->id_service . "<br>";
        echo $this->id_user ."<br>";
    }
    public function update($id, $column, $value){
        try{
            $pdo = require 'connection.php';
            $sql = "UPDATE  reservations SET ".$column." =? WHERE id=?";
            $stmt= $pdo->prepare($sql);
            $pdo->beginTransaction();
            $stmt->execute([$value, $id]);
            $pdo->commit();
            
        }catch(Exception $e){
            $pdo->rollback();
            echo $e->getMessage() . "<br>";
            return false;
        }
        return true;


    }

}



?>