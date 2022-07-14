<?php 
class Account {
  private $db;
  private $rut;
  private $role;
  private $firstname;
  private $lastname;
  private $phone;
  private $address;
  private $commune;
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

  public function getCommune() {
    return $this->commune;
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

  public function setCommune($commune) {
    $this->commune = $this->db->escape_string($commune);
  }

  public function setEmail($email) {
    $this->email = $this->db->escape_string($email);
  }

  public function setPassword($password) {
    $this->password = $password;
  }
  public function setCreatedAt($created_at) {
    $this->created_at = $created_at;
  }

  public function setUpdatedAt($updated_at) {
    $this->updated_at = $updated_at;
  }

  public function getByRut($rut) {
    $query = "SELECT * FROM user WHERE rut = '$rut'";
    $result = $this->db->query($query);
    return $result->fetch_object();
  }


  public function getAllMechanics() {
    $query = "SELECT * FROM user WHERE role = 'mechanic'";
    $mechanics = $this->db->query($query);
    return $mechanics;
  }

  public function getAllClients() {
    $query = "SELECT * FROM user WHERE role = 'client'";
    $clients = $this->db->query($query);
    return $clients;
  }

  public function save() {
    $query = "INSERT INTO USER (ROLE,RUT, FIRSTNAME, LASTNAME, PHONE, ADDRESS, COMMUNE, EMAIL, PASSWORD) VALUES ('{$this->getRole()}','{$this->getRut()}', '{$this->getFirstname()}', '{$this->getLastname()}', '{$this->getPhone()}', '{$this->getAddress()}', '{$this->getCommune()}', '{$this->getEmail()}', '{$this->getPassword()}')";
    $save = $this->db->query($query);
    $result = false;
    if ($save) {
      $result = true;
    }
    return $result;
  }
  
  public function getProfile() {
    $query = "SELECT * FROM user WHERE RUT = '$this->rut'";
    $result = $this->db->query($query);
    return $result->fetch_object();
  }

  public function update(){
    $query = "UPDATE USER SET FIRSTNAME = '{$this->getFirstname()}', LASTNAME = '{$this->getLastname()}', PHONE = '{$this->getPhone()}', ADDRESS = '{$this->getAddress()}', COMMUNE = '{$this->getCommune()}', EMAIL = '{$this->getEmail()}', PASSWORD = '{$this->getPassword()}' WHERE RUT = '{$this->getRut()}'";
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
    
    $query = "SELECT * FROM USER WHERE EMAIL = '{$email}' LIMIT 1";
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
