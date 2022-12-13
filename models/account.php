<?php 
class Account {
  private $db;
  private $rut;
  private $role;
  private $firstname;
  private $lastname;
  private $phone;
  private $address;
  private $id_commune;
  private $email;
  private $password;
  private $created_at;
  private $updated_at;

  public function __construct() {
    $this->db = Database::connect();
  }

  public function getRole() {
    return $this->role;
  }

  public function getRut() {
    return $this->rut;
  }

  public function getFirstname() {
    return $this->firstname;
  }

  public function getLastname() {
    return $this->lastname;
  }

  public function getPhone() {
    return $this->phone;
  }

  public function getAddress() {
    return $this->address;
  }

  public function getIdCommune() {
    return $this->id_commune;
  }

  public function getEmail() {
    return $this->email;
  }

  public function getPassword() {
    return password_hash($this->db->escape_string($this->password), PASSWORD_DEFAULT);
  }
  public function getCreatedAt() {
    return $this->created_at;
  }

  public function getUpdatedAt() {
    return $this->updated_at;
  }

  public function setRole($role) {
    $this->role = $this->db->escape_string($role);
  }

  public function setRut($rut) {
    $this->rut = $this->db->escape_string($rut);
  }

  public function setFirstname($firstname) {
    $this->firstname = $this->db->escape_string($firstname);
  }

  public function setLastname($lastname) {
    $this->lastname = $this->db->escape_string($lastname);
  }

  public function setPhone($phone) {
    $this->phone = $this->db->escape_string($phone);
  }

  public function setAddress($address) {
    $this->address = $this->db->escape_string($address);
  }

  public function setIdCommune($id_commune) {
    $this->id_commune = $this->db->escape_string($id_commune);
  }

  public function setEmail($email) {
    $this->email = $this->db->escape_string($email);
  }

  public function setPassword($password) {
    $this->password = $this->db->escape_string($password);;
  }
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  public function getByRut($rut) {
    $query = "SELECT * FROM user u INNER JOIN COMMUNE c on u.ID_COMMUNE = c.ID_COMMUNE  WHERE rut = '$rut'";
    $result = $this->db->query($query);
    return $result->fetch_object();
  }


  public function getAllMechanics() {
    $query = "SELECT u.*,c.NOMBRE FROM user u INNER JOIN COMMUNE c on u.ID_COMMUNE = c.ID_COMMUNE WHERE role = 'mechanic'";
    $mechanics = $this->db->query($query);
    return $mechanics;
  }

  public function getAllClients() {
    $query = "SELECT u.*,c.NOMBRE FROM user u INNER JOIN COMMUNE c on u.ID_COMMUNE = c.ID_COMMUNE WHERE role = 'client'";
    $clients = $this->db->query($query);
    return $clients;
  }

  //save without commune
  public function save()
  {
   $query = "INSERT INTO USER (ROLE,RUT, FIRSTNAME, LASTNAME, PHONE, ADDRESS, ID_COMMUNE, EMAIL, PASSWORD) VALUES ('{$this->getRole()}','{$this->getRut()}', '{$this->getFirstname()}', '{$this->getLastname()}', '{$this->getPhone()}', '{$this->getAddress()}', '{$this->getIdCommune()}','{$this->getEmail()}', '{$this->getPassword()}')";
   $duplicate = "SELECT * FROM USER WHERE RUT = '{$this->getRut()}' OR EMAIL = '{$this->getEmail()}'";
   if (mysqli_num_rows($this->db->query($duplicate)) > 0){
    $_SESSION['saveRutClient'] = 'El rut o correo ingresado ya se encuentran registrados';
    // $_SESSION['saveRutMechanic'] = 'El rut o correo ingresado ya se encuentran registrados';
  }else{
    $_SESSION['saveRutClient'] = 'El rut o el correo no se encuentra registrado';
    // $_SESSION['saveRutMechanic'] = 'El rut o correo ingresado ya se encuentran registrados';

    $save = $this->db->query($query);
    $result = false;
    if ($save) {
      $result = true;
    }
      return $result;
  }
    
  }

  public function register(){
    $query = "INSERT INTO USER (ROLE,RUT, FIRSTNAME, LASTNAME, ID_COMMUNE,EMAIL, PASSWORD) VALUES ('{$this->getRole()}','{$this->getRut()}', '{$this->getFirstname()}', '{$this->getLastname()}', '{$this->getIdCommune()}','{$this->getEmail()}', '{$this->getPassword()}')";
    // die($query);
    // $query = "INSERT INTO USER (ROLE,RUT, FIRSTNAME, LASTNAME,EMAIL, PASSWORD) VALUES ('{$this->getRole()}','{$this->getRut()}', '{$this->getFirstname()}', '{$this->getLastname()}', '{$this->getEmail()}', '{$this->getPassword()}')";
    $save = $this->db->query($query);
    $result = false;
    if ($save) {
      $result = true;
    }
      return $result;
  }

    // $query = "INSERT INTO USER (ROLE,RUT, FIRSTNAME, LASTNAME, PHONE, ADDRESS, ID_COMMUNE, EMAIL, PASSWORD) VALUES ('{$this->getRole()}','{$this->getRut()}', '{$this->getFirstname()}', '{$this->getLastname()}', '{$this->getPhone()}', '{$this->getAddress()}', '{$this->getIdCommune()}','{$this->getEmail()}', '{$this->getPassword()}')";
    // $save = $this->db->query($query);
    // $result = false;
    // if ($save) {
    //   $result = true;
    // }
    //   return $result;
    // }
  
  //SAVE WITH COMMUNE
  /*
    $query = "INSERT INTO USER (ROLE,RUT, FIRSTNAME, LASTNAME, PHONE, ADDRESS, EMAIL, PASSWORD) VALUES ('{$this->getRole()}','{$this->getRut()}', '{$this->getFirstname()}', '{$this->getLastname()}', '{$this->getPhone()}', '{$this->getAddress()}', '{$this->getEmail()}', '{$this->getPassword()}')";
    $save = $this->db->query($query);
    // die($query);
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }*/
  
  public function getProfile() {
    $query = "SELECT * FROM user u INNER JOIN COMMUNE c on c.ID_COMMUNE = u.ID_COMMUNE WHERE RUT = '$this->rut'";
    $result = $this->db->query($query);
    return $result->fetch_object();
  }

  public function update(){
    $query = "UPDATE USER SET FIRSTNAME = '{$this->getFirstname()}', LASTNAME = '{$this->getLastname()}', PHONE = '{$this->getPhone()}', EMAIL = '{$this->getEmail()}' WHERE RUT = '{$this->getRut()}'";
    // die($query);
    $update = $this->db->query($query);
    $result = false;
    if ($update) {
      return true;
    }
    return $result;
  }

  public function updateClient(){
    $query = "UPDATE USER SET FIRSTNAME = '{$this->getFirstname()}', LASTNAME = '{$this->getLastname()}', PHONE = '{$this->getPhone()}',ADDRESS = '{$this->getAddress()}', ID_COMMUNE = '{$this->getIdCommune()}', EMAIL = '{$this->getEmail()}' WHERE RUT = '{$this->getRut()}'";
    $update = $this->db->query($query);
    $result = false;
    if ($update) {
      return true;
    }
    return $result;
  }

  public function delete() {
    $query = "DELETE FROM user WHERE RUT = '{$this->getRut()}'";
    $delete = $this->db->query($query);
    $result = false;
    if ($delete) {
      $result = true;
    }
    return $result;
  }

  public function login() {
    $result = false;
    $email = $this->email;
    $password = $this->password;
    
    $query = "SELECT * FROM user WHERE EMAIL = '{$email}' LIMIT 1";
    $login = $this->db->query($query);
    if ($login && $login->num_rows == 1) {
      $account = $login->fetch_object();
      if (password_verify($password, $account->PASSWORD)) {
        $result = $account;
      }
    }
    return $result;
  }
}