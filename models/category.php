<?php

Class Category{

    private $id;
    private $name_category;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getId() {
        return $this->id;
    }

    public function getNameCategory() {
    return $this->name_category;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setNameCategory($name_category){
        $this->name_category = $this->db->real_escape_string($name_category);
    }
    

    public function getAll() {
        $query = "SELECT * FROM category ORDER BY ID ASC";
        $categories = $this->db->query($query);
        return $categories;

    }

    public function getById($id) {
        $query = "SELECT * FROM CATEGORY WHERE ID = '$id'";
        $category = $this->db->query($query);
        return $category->fetch_object();
    }

    public function delete(){
        $query = "DELETE FROM CATEGORY WHERE ID = '{$this->getID()}'";
        
        $delete = $this->db->query($query);
        $result = false;
        if ($delete) {
            $result = true;
        }
        return $result;
    }

    public function save(){
        $query = "INSERT INTO CATEGORY VALUES (NULL, '{$this->getNameCategory()}')";
        $save = $this->db->query($query);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    public function update(){
        $query = "UPDATE CATEGORY SET NAME_CATEGORY = '{$this->getNameCategory()}' WHERE ID = '{$this->getId()}'";
        // die($query);

        $update = $this->db->query($query);
        $result = false;
        if ($update) {
          return true;
        }
        return $result;
      }



}
