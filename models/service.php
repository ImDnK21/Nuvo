<?php

class Service {

    private $db;
    private $id;
    private $name;
    private $description;
    private $price;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getId() {
        return $this->id;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getPrice() {
        return $this->price;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setName($name) {
        $this->name = $this->db->real_escape_string($name);
    }

    public function setDescription($description) {
        $this->description = $this->db->real_escape_string($description);
    }

    public function setPrice($price) {
        $this->price = $this->db->real_escape_string($price);
    }

    public function save(){
        $query = "INSERT INTO SERVICE (NAME, DESCRIPTION, PRICE) VALUES ('{$this->name}', '{$this->description}', '{$this->price}')";
        // var_dump($query);
        // die($query);
        $save = $this->db->query($query);
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }

    public function GetById($id){
        $query = "SELECT * FROM SERVICE WHERE ID = {$id}";
        $service = $this->db->query($query);
        return $service->fetch_object();
    }
    
    public function update(){
        $query = "UPDATE SERVICE SET NAME = '{$this->getName()}' , DESCRIPTION = '{$this->getDescription()}', PRICE = '{$this->getPrice()}' WHERE ID = '{$this->getId()}'";
        die($query);

        $update = $this->db->query($query);
        $result = false;
        if ($update) {
          return true;
        }
        return $result;
      }



    public function getAll(){
        $query = "SELECT * FROM SERVICE ORDER BY ID ASC";
        $services = $this->db->query($query);
        return $services;
    }

    

    public function delete(){
        $query = "DELETE FROM SERVICE WHERE ID = '{$this->id}'";
        $delete = $this->db->query($query);
        $result = false;
        if($delete){
            $result = true;
        }
        return $result;
    }















}


?>