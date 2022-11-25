<?php

Class Wo_Service{

    private $id;
    private $id_service;
    private $id_wo;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getId() {
        return $this->id;
    }

    public function getIdWo(){
       return $this->id_wo;
    }
    

    public function getIdService() {
    return $this->id_service;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setIdService($id_service){
        $this->id_service = $id_service;
    }

    public function setIdWo($id_wo){
        $this->id_wo = $id_wo;
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

    public function getCantServices(){
        $query = "SELECT COUNT(ID_SERVICE) AS CANTIDAD DE SERVICIOS FROM WO_SERVICE WHERE ID_WO = $this->id_wo";
        $cantidad = $this->db->query($query);
        return $cantidad->fetch_object();
    }

    // public function delete(){
    //     $query = "DELETE FROM CATEGORY WHERE ID = '{$this->getID()}'";
        
    //     $delete = $this->db->query($query);
    //     $result = false;
    //     if ($delete) {
    //         $result = true;
    //     }
    //     return $result;
    // }

    

    public function save() {
        $query = "INSERT INTO WO_SERVICE (ID_SERVICE, ID_WO) VALUES ('{$this->id_service}', '{$this->id_wo}')";
        $save = $this->db->query($query);
        $result = false;
        if ($save) {
          $result = true;
        }
        return $result;
      }

    // public function update(){
    //     $query = "UPDATE CATEGORY SET NAME_CATEGORY = '{$this->getNameCategory()}' WHERE ID = '{$this->getId()}'";
    //     // die($query);

    //     $update = $this->db->query($query);
    //     $result = false;
    //     if ($update) {
    //       return true;
    //     }
    //     return $result;
    //   }



}
