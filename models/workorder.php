<?php
class WorkOrder
{
  private $db;
  private $id;
  private $patent_vehicle;
  private $rut_client;
  private $rut_mechanic;
  private $observations;
  private $service;

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

  public function getService(){
    return $this->service;
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

  public function setService($service){
    $this->service = $service;
  }

  public function validarOT()
  {
    $query = "SELECT * FROM workorder WHERE ID = $this->id";
    //RUT_CLIENT = $this->rut_client
    // die($query);
    
    $result = $this->db->query($query);

    return $result->fetch_object();
  }

  public function getAll()
  {
    $query = "SELECT * FROM WORKORDER";
    $workorders = $this->db->query($query);
    return $workorders;
  }

  public function getOne() {
    $query = "SELECT * FROM WORKORDER WHERE ID = $this->id";
    $workorder = $this->db->query($query);
    return $workorder->fetch_object();
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
    $query = "INSERT INTO WORKORDER (PATENT_VEHICLE, RUT_CLIENT, RUT_MECHANIC, OBSERVATIONS, SERVICE) VALUES ('{$this->patent_vehicle}', '{$this->rut_client}', '{$this->rut_mechanic}', '{$this->observations}', '{$this->service}')";
    // die($query);
    $save = $this->db->query($query);
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }
}
