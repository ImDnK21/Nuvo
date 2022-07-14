<?php 

class Supply{

    /* Declaring the properties of the class. */
    private $db;
    private $id;
    private $id_category;
    private $name;
    private $description;
    private $stock;
    private $img;

    /* Constructor. */
    public function __construct() {
        $this->db = Database::connect();
    }

    /* Getters. */

    public function getId() {
        return $this->id;
    }

    public function getIdCategory() {
        return $this->id_category;
    }

    public function getName() {
        return $this->name;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getStock() {
        return $this->stock;
    }   

    public function getImg() {
        return $this->img;
    }

    public function setId($id){
        $this->id = $id;
    }

    public function setIdCategory($id_category){
        $this->id_category = $id_category;
    }

    public function setName($name){
        $this->name = $this->db->real_escape_string($name);
    }
    public function setDescription($description){
        $this->description = $this->db->real_escape_string($description);
    }
    public function setStock($stock){
        $this->stock = $this->db->real_escape_string($stock);
    }

    public function setImg($img){
        $this->img = $img;
    }

    public function getAll(){
        $query = "SELECT * FROM SUPPLY LEFT JOIN CATEGORY ON SUPPLY.ID_CATEGORY = CATEGORY.ID";
        $supplies = $this->db->query($query);
        return $supplies;
    }

    public function getOne($id) {
        $query = $this->db->query("SELECT * FROM SUPPLY WHERE ID_SUPPLY = '$id'");
        return $query->fetch_object();
      }

    public function getAllCategory(){
        $query = "SELECT p.*c.nombre as 'catnombre' FROM SUPPLY s "
                . "INNER JOIN CATEGORY c ON c.ID = p.ID_CATEGORY"
                . "WHERE p.ID_CATEGORY = {$this->getIdCategory()}"
                . "ORDER BY ID DESC";
        $supplies = $this->db->query($query);
        return $supplies;
    }

    public function save() {
        $query = "INSERT INTO SUPPLY (ID_CATEGORY, NAME, DESCRIPTION, STOCK, IMG) VALUES ('{$this->id_category}', '{$this->name}', '{$this->description}', '{$this->stock}', '{$this->img}')";
        $save = $this->db->query($query);
        $result = false;
        if ($save) {
          $result = true;
        }
        return $result;
      }

    public function edit(){
		$sql = "UPDATE SUPPLY SET ID_CATEGORY='{$this->id_category}', NAME='{$this->name}', DESCRIPTION={$this->description}, stock={$this->stock}";
		
		if($this->getImg() != null){
			$sql .= ", imagen='{$this->img}'";
		}
		
		$sql .= " WHERE ID_SUPPLY={$this->id};";
		
		
		$save = $this->db->query($sql);
		
		$result = false;
		if($save){
			$result = true;
		}
		return $result;
	}


    public function delete(){
        $query = "DELETE FROM SUPPLY WHERE ID = '{$this->getId()}'";
        $delete = $this->db->query($query);
        $result = false;
        if($delete){
            $result = true;
        }
        return $result;
    }
}















?>