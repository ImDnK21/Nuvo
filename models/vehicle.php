<?php

class Vehicle {

    /* Declaring the properties of the class. */
    private $db;
    private $patent;
    private $owner;
    private $brand;
    private $model;
    private $year;
    private $id_fuel_type;
    private $id_transmission;
    private $color;
    private $chassis_number;
    private $mileage;
    private $id_vehicle_type;

    /* Constructor. */
    public function __construct() {
        $this->db = Database::connect();
    }

     /* Getters. */
    public function getPatent() {
        return $this->patent;
    }

    public function getOwner() {
        return $this->owner;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function getModel() {
        return $this->model;
    }

    public function getYear() {
        return $this->year;
    }

    public function getIdFuel_type() {
        return $this->id_fuel_type;
    }

    public function getIdTransmission() {
        return $this->id_transmission;
    }

    public function getColor() {
        return $this->color;
    }

    public function getChassisNumber() {
        return $this->chassis_number;
    }

    public function getMileage() {
        return $this->mileage;
    }

    public function getIdVehicleType() {
        return $this->id_vehicle_type;
    }

    /* Setters. */
    /* Real_escape_string is used to prevent SQL injection. */


    public function setPatent($patent) {
        $this->patent = $this->db->escape_string($patent);
    }

    public function setOwner($owner) {
        $this->owner = $this->db->escape_string($owner);
    }

    public function setBrand($brand) {
        $this->brand = $this->db->escape_string($brand);
    }

    public function setModel($model) {
        $this->model = $this->db->escape_string($model);
    }

    public function setYear($year) {
        $this->year = $this->db->escape_string($year);
    }

    public function setIdFuelType($id_fuel_type) {
        $this->id_fuel_type = $this->db->escape_string($id_fuel_type);
    }
    
    public function setIdTransmission($id_transmission) {
        $this->id_transmission = $this->db->escape_string($id_transmission);
    }

    public function setColor($color){
        $this->color = $this->db->escape_string($color);
    }

   public function setChassis_number($chassis_number){
        $this->chassis_number = $this->db->escape_string($chassis_number);
   }

    public function setMileage($mileage) {
        $this->mileage = $this->db->escape_string($mileage);
    }

    public function setIdVehicle_type($id_vehicle_type) {
        $this->id_vehicle_type = $this->db->escape_string($id_vehicle_type);
    }

    /**
   * This function returns all the Vehicle from the database.
   * 
   * @return A query object.
   */
    public function getAll(){
        $query = "SELECT v.*,vt.NAME,u.FIRSTNAME,u.LASTNAME FROM VEHICLE v JOIN USER u ON v.OWNER = u.RUT INNER JOIN VEHICLE_TYPE vt ON vt.ID_TYPE = v.ID_TYPE_VEHICLE";
        $vehicles = $this->db->query($query);
        return $vehicles;
    }

    /**
   * It gets a Vehicle by its Patent
   * 
   * @param Patent ABCD-12
   * 
   * @return An object.
   */
    public function getByPatent($patent){
        $query = "SELECT v.*, vt.*,ft.*,tt.* FROM VEHICLE v INNER JOIN VEHICLE_TYPE vt on vt.ID_TYPE = v.ID_TYPE_VEHICLE INNER JOIN FUEL_TYPE ft on ft.ID_FUEL = v.ID_FUEL_TYPE INNER JOIN
        TRANSMISSION_TYPE tt on tt.ID_TRANSMISSION = v.ID_TRANSMISSION WHERE patent = '$patent'";
        $vehicle = $this->db->query($query);
        return $vehicle->fetch_object();
    }


    /* 
        
    */
    public function getByOwner($owner) {
        $query = "SELECT * FROM VEHICLE WHERE owner = '$owner'";
        $vehicle = $this->db->query($query);
        return $vehicle->fetch_object();
    }

    /**
   * It saves the data from the form into the database.
   * 
   * @return The result of the query.
   */
    public function save(){
        $sql = "INSERT INTO VEHICLE (PATENT, OWNER, BRAND, MODEL, YEAR, ID_FUEL_TYPE, ID_TRANSMISSION, COLOR, CHASSIS_NUMBER, MILEAGE, ID_TYPE_VEHICLE ) VALUES ('{$this->getPatent()}', '{$this->getOwner()}','{$this->getBrand()}', '{$this->getModel()}', '{$this->getYear()}', '{$this->getIdFuel_Type()}', '{$this->getIdTransmission()}', '{$this->getColor()}', '{$this->getChassisNumber()}', '{$this->getMileage()}', '{$this->getIdVehicleType()}');";
        // die($sql);
        $save = $this->db->query($sql);
        $result = false;
        if ($save) {
            $result = true;
        }
        return $result;
    }

    /**
   * It updates a Vehicle's information in the database.
   * Patent is the primary key. Can't be updated or modified.
   * all the other fields can be updated.
   * 
   * @return The result of the query.
   */
    public function update(){
        $sql = "UPDATE VEHICLE SET OWNER = '{$this->getOwner()}' ,BRAND = '{$this->getBrand()}', MODEL = '{$this->getModel()}', YEAR = '{$this->getYear()}', ID_FUEL_TYPE = '{$this->getIdFuel_Type()}', ID_TRANSMISSION = '{$this->getIdTransmission()}', COLOR = '{$this->getColor()}', CHASSIS_NUMBER = '{$this->getChassisNumber()}', MILEAGE = '{$this->getMileage()}', ID_TYPE_VEHICLE = '{$this->getIdVehicleType()}' WHERE PATENT = '{$this->getPatent()}';";
        // die($sql);
        $update = $this->db->query($sql);
        $result = false;
        if ($update) {
            $result = true;
        }
        return $result;
    }

     /**
   * It deletes a row from the database table VEHICLE where the PATENT column is equal to the value of the
   * PATENT property of the object
   * 
   * @return The result of the query.
   */
    public function delete(){
        $sql = "DELETE FROM VEHICLE WHERE PATENT = '{$this->getPatent()}';";
        $delete = $this->db->query($sql);
        $result = false;
        if ($delete) {
            $result = true;
        }
        return $result;
    }

    





}
?>
