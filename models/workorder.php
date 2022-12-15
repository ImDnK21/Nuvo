<?php
class WorkOrder
{
  private $db;
  private $id;
  private $patent_vehicle;
  private $rut_client;
  private $rut_mechanic;
  private $observations;
  private $id_status;

  public function __construct()
  {
    $this->db = Database::connect();
  }

  public function getId()
  {
    return $this->id;
  }

  public function getPatentVehicle()
  {
    return $this->patent_vehicle;
  }

  public function getRutClient()
  {
    return $this->rut_client;
  }

  public function getRutMechanic()
  {
    return $this->rut_mechanic;
  }

  public function getObservations()
  {
    return $this->observations;
  }

 

  public function getIdStatus(){
    return $this->id_status;
  }

  public function setId($id)
  {
    $this->id = $id;
  }

  public function setPatentVehicle($patent_vehicle)
  {
    $this->patent_vehicle = $patent_vehicle;
  }

  public function setRutClient($rut_client)
  {
    $this->rut_client = $rut_client;
  }

  public function setRutMechanic($rut_mechanic)
  {
    $this->rut_mechanic = $rut_mechanic;
  }

  public function setObservations($observations)
  {
    $this->observations = $observations;
  }

  

  public function setIdStatus($id_status){
    $this->id_status = $id_status;
  }

  public function validarOT()
  {
    $query = "SELECT * FROM workorder WHERE ID = $this->id" AND "RUT_CLIENT = $this->rut_client";
    //RUT_CLIENT = $this->rut_client
    // die($query);
    
    $result = $this->db->query($query);

    return $result->fetch_object();
  }

  public function getCantServices(){
    $query = "SELECT COUNT(ID_SERVICE) AS CANTIDAD DE SERVICIOS FROM WO_SERVICE WHERE ID_WO = $this->id_wo";
    $cantidad = $this->db->query($query);
    return $cantidad->fetch_object();
}

  public function getAll()
  {
  //   $query = "SELECT * FROM WORKORDER";
    $query = "SELECT w.*,sw.*,u.*,v.*,ft.*,tt.*,vt.*,c.* FROM WORKORDER w 
    INNER JOIN vehicle v on v.PATENT = w.PATENT_VEHICLE 
    INNER JOIN user u on u.RUT = w.RUT_CLIENT 
    INNER JOIN FUEL_TYPE ft on ft.ID_FUEL = v.ID_FUEL_TYPE 
    INNER JOIN VEHICLE_TYPE vt on vt.ID_TYPE = v.ID_TYPE_VEHICLE 
    INNER JOIN STATUS_WO sw on sw.ID_STATUS = w.ID_STATUS 
    INNER JOIN TRANSMISSION_TYPE tt on tt.ID_TRANSMISSION = v.ID_TRANSMISSION 
    INNER JOIN COMMUNE c on c.ID_COMMUNE = u.ID_COMMUNE";
    $workorders = $this->db->query($query);
    return $workorders;
  }

  public function getAllWorkOrdersById($id){
    $query = "SELECT w.*,sw.*,u.*,v.*,ft.*,tt.*,vt.*,c.* FROM WORKORDER w 
    INNER JOIN vehicle v on v.PATENT = w.PATENT_VEHICLE 
    INNER JOIN user u on u.RUT = w.RUT_CLIENT 
    INNER JOIN FUEL_TYPE ft on ft.ID_FUEL = v.ID_FUEL_TYPE 
    INNER JOIN VEHICLE_TYPE vt on vt.ID_TYPE = v.ID_TYPE_VEHICLE 
    INNER JOIN STATUS_WO sw on sw.ID_STATUS = w.ID_STATUS 
    INNER JOIN TRANSMISSION_TYPE tt on tt.ID_TRANSMISSION = v.ID_TRANSMISSION 
    INNER JOIN COMMUNE c on c.ID_COMMUNE = u.ID_COMMUNE WHERE w.ID = '$this->id'";
    // $id = $this->$id->fetch_object();
    // var_dump($id);
    $allWorkOrdersById = $this->db->query($query);
    return $allWorkOrdersById;
    
  }

  public function getByRut($rut_client){
    $query = "SELECT * FROM WORKORDER WHERE RUT_CLIENT = '$rut_client'";
    $workorders = $this->db->query($query);
    // return $workorder->fetch_object();
    return $workorders;

  }

  public function getAllServices(){
    $query = "SELECT wo.*,s.NAME,s.DESCRIPTION,s.PRICE FROM wo_service wo INNER JOIN service s on wo.ID_SERVICE = s.ID ";
    $allServices = $this->db->query($query);
    return $allServices;
}

  public function getOne() {
    $query = "SELECT * FROM WORKORDER w INNER JOIN vehicle v on v.PATENT = w.PATENT_VEHICLE 
    INNER JOIN user u on u.RUT = w.RUT_CLIENT WHERE w.ID = '$this->id'";
    $workorder = $this->db->query($query);
    // die($query);
    return $workorder->fetch_object();
  }

  public function getDataToWO(){
    $query = "SELECT w.id as id_workorder,w.PATENT_VEHICLE,w.RUT_MECHANIC
              ,w.OBSERVATIONS,w.STATUS,w.CREATED_AT,w.UPDATED_AT,v.BRAND,v.MODEL,
              v.YEAR,u.RUT,u.FIRSTNAME, u.LASTNAME FROM workorder w 
              INNER JOIN vehicle v on v.PATENT = w.PATENT_VEHICLE 
              INNER JOIN user u on u.RUT = w.RUT_CLIENT WHERE w.ID = '$this->id'";
    $dataWO = $this->db->query($query);
    // die($query);
    // return $data->fetch_object();   
    return $dataWO;;                             
  }

  public function getServices() {
    $query = "SELECT * FROM workorder WO JOIN wo_service WOS ON WO.ID = WOS.ID_WO JOIN service S ON WOS.ID_SERVICE = S.ID WHERE WO.ID = '$this->id'";
    $services = $this->db->query($query);
    return $services;
  }

  public function getLastId(){
    $query = "SELECT LAST_INSERT_ID()";
    $lastId = $this->db->query($query);
    // echo 'ultimo id '. strval($lastId->fetch_object());
    $numberId = $lastId->fetch_array();
    // var_dump('test', $test);
    // // var_dump('Last id', intval($test[0]));
    var_dump('Last id', intval($numberId[0]));
    return intval($numberId[0]);

  }

//   public function getWoByPatent($patent_vehicle){
//     $query = "SELECT * FROM WORKORDER WHERE PATENT = '$patent_vehicle'";
//     $vehicle = $this->db->query($query);
//     return $vehicle->fetch_object();
// }

public function getByPatent($patent_vehicle) {
  $query = "SELECT * FROM WORKORDER WHERE PATENT_VEHICLE = '$patent_vehicle'";
  $workorder = $this->db->query($query);
  return $workorder->fetch_object();
}


  public function save()
  {
    $query = "INSERT INTO WORKORDER (PATENT_VEHICLE, RUT_CLIENT, RUT_MECHANIC, OBSERVATIONS, ID_STATUS) VALUES ('{$this->patent_vehicle}', '{$this->rut_client}', '{$this->rut_mechanic}', '{$this->observations}', '{$this->id_status}')";
    // die($query);
    $save = $this->db->query($query);
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }

  public function update(){
    $query = "UPDATE WORKORDER SET PATENT_VEHICLE = '{$this->getPatentVehicle()}' , RUT_CLIENT = '{$this->getRutClient()}', RUT_MECHANIC = '{$this->getRutMechanic()}' , OBSERVATIONS = '{$this->getObservations()}', STATUS = '{$this->getStatus}' WHERE ID = '{$this->getId()}'";
    die($query);
    $update = $this->db->query($query);
    $result = false;
    if ($update) {
      return true;
    }
    return $result;
  }

  public function delete(){
    $query = "DELETE FROM WORKORDER WHERE ID = '{$this->getID()}'";
    // die($query);
    $delete = $this->db->query($query);
    $result = false;
    if ($delete) {
        $result = true;
    }
    return $result;
}
}
