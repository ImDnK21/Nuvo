<?php
require_once('models/account.php');
require_once('models/vehicle.php');
require_once('models/workorder.php');
require_once('models/category.php');
require_once('models/supply.php');
require_once('models/service.php');
require_once('models/wo_service.php');

class AdminController {
    /**
     * If the user is not an admin, redirect to the login page.
     * and if user is an admin, redirecto to the Dashboard page.
     */
    public function dashboard()
    {
        utils::isAdmin();
        $account = new Account();
        $workorder = new WorkOrder();
        $supply = new Supply();
        $supplies= $supply->getAll();
        $supliesLow = $supply->getSupplyLowStock();

        $clients = $account->getAllClients();
        $mechanics = $account->getAllMechanics();
        $workorders = $workorder->getAll();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/dashboard.php');
    }

    /**
     ** CLIENT FUNCTION'S METHODS
     * 
     * It's a function that displays a list of clients.
     */
    public function ViewListClient()
    {
        Utils::isAdmin();
        $client = new Account();
        $clients = $client->getAllClients();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/client/ViewList.php');
    }

    /**
     * It's a function that displays a form to create a new client.
     */
    public function AddClient()
    {
        Utils::isAdmin();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/client/AddClient.php');
    }

    /**
     * It's a function that displays a form to Edit a exist client.
     */
    public function EditClient()
    {
        Utils::isAdmin();
        if (isset($_GET['rut']) && !empty($_GET['rut'])) {
            require_once('views/layout/sidebar.php');
            $client = new Account();
            $client = $client->getByRut($_GET['rut']);
            require_once('views/admin/client/EditClient.php');
        }
    }
    

    /**
     * If the form is submitted, then create a new client object, set the properties of the client
     * object, and save the client object.
     */
    public function SaveClient()
    {
        Utils::isAdmin();
        if (isset($_POST)) {
            $rut = isset($_POST['rut']) ? trim($_POST['rut']) : false;
            $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : false;
            $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : false;
            $phone = isset($_POST['phone']) ? trim($_POST['phone']) : false;
            $address = isset($_POST['address']) ? trim($_POST['address']) : false;
            $commune = isset($_POST['commune']) ? trim($_POST['commune']) : false;
            $email = isset($_POST['email']) ? trim($_POST['email']) : false;
            


            if ($rut && $firstname && $lastname && $phone && $address && $commune && $email) {
                $client = new Account();
                $client->setRut($_POST['rut']);
                $client->setRole('client');
                $client->setFirstname($_POST['firstname']);
                $client->setLastname($_POST['lastname']);
                $client->setPassword('123');
                $client->setPhone($_POST['phone']);
                $client->setAddress($_POST['address']);
                $client->setCommune($_POST['commune']);
                $client->setEmail($_POST['email']);


                if ($client->save()) {
                    $_SESSION['saveClient'] = 'Se agregó correctamente el cliente';
                } else {
                    // die(var_dump($_GET['id']));
                    echo $_SESSION['saveClient'] = 'Error al agregar el cliente';
                }
            } else {
                $_SESSION['saveClient'] = 'Debes rellenar todos los campos';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListClient');
    }

    /**
     * It updates the client's data in the database.
     */
    public function UpdateClient()
    {
        Utils::isAdmin();
        if (isset($_POST)) {
            $rut = isset($_POST['rut']) ? trim($_POST['rut']) : false;
            $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : false;
            $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : false;
            $phone = isset($_POST['phone']) ? trim($_POST['phone']) : false;
            $email = isset($_POST['email']) ? trim($_POST['email']) : false;
            $address = isset($_POST['address']) ? trim($_POST['address']) : false;
            $commune = isset($_POST['commune']) ? trim($_POST['commune']) : false;

            if ($rut && $firstname && $lastname && $email) {
                $client = new Account();
                $client->setRut($_POST['rut']);
                $client->setFirstname($_POST['firstname']);
                $client->setLastname($_POST['lastname']);
                $client->setPhone($_POST['phone']);
                $client->setEmail($_POST['email']);
                $client->setAddress($_POST['address']);
                $client->setCommune($_POST['commune']);

                if ($client->update()) {
                    $_SESSION['saveClient'] = 'Se actualizó correctamente el cliente';
                } else {
                    $_SESSION['saveClient'] = 'Error al editar el cliente';
                }
            } else {
                $_SESSION['saveClient'] = 'Debes rellenar todos los campos';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListClient');
    }
    


    /**
     * It deletes a selected client from the database.
     */
    public function DeleteClient()
    {
        Utils::isAdmin();
        if (isset($_GET['rut'])) {
            $rut = $_GET['rut'];
            $client = new Account();
            $client->setRut($rut);
            if ($client->delete()) {
                $_SESSION['saveClient'] = 'Se eliminó correctamente el cliente';
            } else {
                $_SESSION['saveClient'] = 'Error al eliminar el cliente';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListClient');
    }


    /**
     ** MECHANICAL FUNCTION'S METHODS
     * 
     * It's a function that displays a list of Mechanics.
     */
    public function ViewListMechanic()
    {
        Utils::isAdmin();

        $mechanic = new Account();
        $mechanics = $mechanic->getAllMechanics();

        require_once('views/layout/sidebar.php');
        require_once('views/admin/mechanic/ViewList.php');
    }

    /**
     * AddMechanic It's a function that displays a form to create a new Mechanic.
     * "Utils::isAdmin();" is a function that checks if the user is an admin, if not, it redirects to the
     * login page.
     */

    public function AddMechanic()
    {
        Utils::isAdmin();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/mechanic/AddMechanic.php');
    }

    /**
     * Utils::isAdmin();" It checks if the user is an admin, then checks if the rut is set and not empty, then it creates
     * a new mechanic object, then it gets the mechanic by rut, then it requires the sidebar and the
     * edit mechanic view.
     */
    public function EditMechanic()
    {
        Utils::isAdmin();
        if (isset($_GET['rut']) && !empty($_GET['rut'])) {
            $mechanic = new Account();
            $mechanic = $mechanic->getByRut($_GET['rut']);
            require_once('views/layout/sidebar.php');
            require_once('views/admin/mechanic/EditMechanic.php');
        }
    }

    /**
     * If the form is submitted, then create a new Mechanic object, set the properties of the Mechanic
     * object, and save the Mechanic object.
     */
    public function SaveMechanic()
    {
        Utils::isAdmin();
        if (isset($_POST)) {
            $rut = isset($_POST['rut']) ? trim($_POST['rut']) : false;
            $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : false;
            $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : false;
            $phone = isset($_POST['phone']) ? trim($_POST['phone']) : false;
            $address = isset($_POST['address']) ? trim($_POST['address']) : false;
            $commune = isset($_POST['commune']) ? trim($_POST['commune']) : false;
            $email = isset($_POST['email']) ? trim($_POST['email']) : false;


            if ($rut && $firstname && $lastname && $phone && $commune && $email) {
                $mechanic = new Account();
                $mechanic->setRole('mechanic');
                $mechanic->setRut($_POST['rut']);
                $mechanic->setFirstname($_POST['firstname']);
                $mechanic->setLastname($_POST['lastname']);
                $mechanic->setAddress($_POST['address']);
                $mechanic->setCommune($_POST['commune']);
                $mechanic->setPhone($_POST['phone']);
                $mechanic->setEmail($_POST['email']);

                if ($mechanic->save()) {
                    $_SESSION['saveMechanic'] = 'Se agregó correctamente el mecanico';
                } else {
                    $_SESSION['saveMechanic'] = 'Error al agregar el mecanico';
                }
            } else {
                $_SESSION['saveMechanic'] = 'Debes rellenar todos los campos';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListMechanic');
    }

    /**
     * It updates the Mechanic's data in the database.
     */
    public function UpdateMechanic()
    {
        Utils::isAdmin();
        if (isset($_POST)) {
            $rut = isset($_POST['rut']) ? trim($_POST['rut']) : false;
            $firstname = isset($_POST['firstname']) ? trim($_POST['firstname']) : false;
            $lastname = isset($_POST['lastname']) ? trim($_POST['lastname']) : false;
            $phone = isset($_POST['phone']) ? trim($_POST['phone']) : false;
            $address = isset($_POST['address']) ? trim($_POST['address']) : false;
            $commune = isset($_POST['commune']) ? trim($_POST['commune']) : false;
            $email = isset($_POST['email']) ? trim($_POST['email']) : false;
            
            if ($rut && $firstname && $lastname && $phone && $email) {
                $mechanic = new Account();
                $mechanic->setRut($_POST['rut']);
                $mechanic->setFirstname($_POST['firstname']);
                $mechanic->setLastname($_POST['lastname']);
                $mechanic->setPhone($_POST['phone']);
                $mechanic->setAddress($_POST['address']);
                $mechanic->setCommune($_POST['commune']);
                $mechanic->setEmail($_POST['email']);

                if ($mechanic->update()) {
                    $_SESSION['saveMechanic'] = 'Se actualizó correctamente el mecanico';
                } else {
                    $_SESSION['saveMechanic'] = 'Error al editar el mecanico';
                }
            } else {
                $_SESSION['saveMechanic'] = 'Debes rellenar todos los campos';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListMechanic');
    }

    /**
     * It deletes a selected Mechanic from the database.
     */
    public function DeleteMechanic()
    {
        Utils::isAdmin();
        if (isset($_GET['rut'])) {
            $rut = $_GET['rut'];
            $mechanic = new Account();
            $mechanic->setRut($rut);
            if ($mechanic->delete()) {
                $_SESSION['saveMechanic'] = 'Se eliminó correctamente el mecanico';
            } else {
                $_SESSION['saveMechanic'] = 'Error al eliminar el mecanico';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListMechanic');
    }

    /**
     ** VEHICLES FUNCTION'S METHODS
     * 
     * It's a function that displays a list of Mechanics.
     */
    public function ViewListVehicle()
    {
        Utils::isAdmin();
        $vehicle = new Vehicle();
        $vehicles = $vehicle->getAll();
        // $vehicles = $vehicle->getByOwner($_GET['owner']);
        
        require_once('views/layout/sidebar.php');
        require_once('views/admin/vehicle/ViewList.php');
    }
    

   

    /**
     * AddVehicle It's a function that displays a form to create a new Vehicle.
     * "Utils::isAdmin();" is a function that checks if the user is an admin, if not, it redirects to the
     * login page.
     */
    public function AddVehicle()
    {
        Utils::isAdmin();
        $client  = new Account();
        $clients = $client->getAllClients();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/vehicle/AddVehicle.php');
    }



    /**
     * Utils::isAdmin() = It checks if the user is an admin, then checks if the patent is set and not empty, then it
     * creates a new vehicle object, then it gets the vehicle by patent, then it requires the sidebar
     * and the edit vehicle view.
     */
    public function EditVehicle()
    {
        Utils::isAdmin();
        if (isset($_GET['patent']) && !empty($_GET['patent'])) {
            $vehicle = new Vehicle();
            $vehicle = $vehicle->getByPatent($_GET['patent']);
            $client  = new Account();
            $clients = $client->getAllClients();
            require_once('views/layout/sidebar.php');
            require_once('views/admin/vehicle/EditVehicle.php');
        }
    }

    public function SaveVehicle()
    {
        Utils::isAdmin();
        if (isset($_POST)) {
            $patent = isset($_POST['patent']) ? trim($_POST['patent']) : false;
            $owner = isset($_POST['owner']) ? trim($_POST['owner']) : false;
            $brand = isset($_POST['brand']) ? trim($_POST['brand']) : false;
            $model = isset($_POST['model']) ? trim($_POST['model']) : false;
            $year = isset($_POST['year']) ? trim($_POST['year']) : false;
            $fuel_type = isset($_POST['fuel_type']) ? trim($_POST['fuel_type']) : false;
            $transmission = isset($_POST['transmission']) ? trim($_POST['transmission']) : false;
            $color = isset($_POST['color']) ? trim($_POST['color']) : false;
            $chassis_number = isset($_POST['chassis_number']) ? trim($_POST['chassis_number']) : false;
            $mileage = isset($_POST['mileage']) ? trim($_POST['mileage']) : false;
            $vehicle_type = isset($_POST['vehicle_type']) ? trim($_POST['vehicle_type']) : false;

            if ($patent && $owner && $brand && $model && $year && $fuel_type && $transmission && $color && $chassis_number && $mileage && $vehicle_type) {
                $vehicle = new Vehicle();
                $vehicle->setPatent($_POST['patent']);
                $vehicle->setOwner($_POST['owner']);
                $vehicle->setBrand($_POST['brand']);
                $vehicle->setModel($_POST['model']);
                $vehicle->setYear($_POST['year']);
                $vehicle->setFuelType($_POST['fuel_type']);
                $vehicle->setTransmission($_POST['transmission']);
                $vehicle->setColor($_POST['color']);
                $vehicle->setChassis_number($_POST['chassis_number']);
                $vehicle->setMileage($_POST['mileage']);
                $vehicle->setVehicle_type($_POST['vehicle_type']);
                
                if ($vehicle->save()) {
                    $_SESSION['saveVehicle'] = 'Se agregó correctamente el vehiculo';
                
                } else {
                    $_SESSION['saveVehicle'] = 'Error al agregar el vehiculo';
                }
            } else {
                $_SESSION['saveVehicle'] = 'Debes rellenar todos los campos';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListVehicle');
    }

    public function UpdateVehicle()
    {
        Utils::isAdmin();
        if (isset($_POST)) {
            $patent = isset($_POST['patent']) ? trim($_POST['patent']) : false;
            $owner = isset($_POST['owner']) ? trim($_POST['owner']) : false;
            $brand = isset($_POST['brand']) ? trim($_POST['brand']) : false;
            $model = isset($_POST['model']) ? trim($_POST['model']) : false;
            $year = isset($_POST['year']) ? trim($_POST['year']) : false;
            $fuel_type = isset($_POST['fuel_type']) ? trim($_POST['fuel_type']) : false;
            $transmission = isset($_POST['transmission']) ? trim($_POST['transmission']) : false;
            $color = isset($_POST['color']) ? trim($_POST['color']) : false;
            $chassis_number = isset($_POST['chassis_number']) ? trim($_POST['chassis_number']) : false;
            $mileage = isset($_POST['mileage']) ? trim($_POST['mileage']) : false;
            $vehicle_type = isset($_POST['vehicle_type']) ? trim($_POST['vehicle_type']) : false;

            if ($patent && $owner && $brand && $model && $year && $fuel_type && $transmission && $color && $chassis_number && $mileage && $vehicle_type) {
                $vehicle = new Vehicle();
                $vehicle->setPatent($_POST['patent']);
                $vehicle->setOwner($_POST['patent']);
                $vehicle->setBrand($_POST['brand']);
                $vehicle->setModel($_POST['model']);
                $vehicle->setYear($_POST['year']);
                $vehicle->setFuelType($_POST['fuel_type']);
                $vehicle->setTransmission($_POST['transmission']);
                $vehicle->setColor($_POST['color']);
                $vehicle->setChassis_number($_POST['chassis_number']);
                $vehicle->setMileage($_POST['mileage']);
                $vehicle->setVehicle_type($_POST['vehicle_type']);

                if ($vehicle->update()) {
                    $_SESSION['saveVehicle'] = 'Se actualizó correctamente el vehiculo';
                } else {
                    $_SESSION['saveVehicle'] = 'Error al actualizar el vehiculo';
                }
            } else {
                $_SESSION['saveVehicle'] = 'Debes rellenar todos los campos';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListVehicle');
    }

    /**
     * It deletes a selected Vehicle from the database.
     */
    public function DeleteVehicle()
    {
        Utils::isAdmin();
        if (isset($_GET['patent'])) {
            $patent = $_GET['patent'];
            $vehicle = new Vehicle();
            $vehicle->setPatent($patent);
            if ($vehicle->delete()) {
                $_SESSION['saveVehicle'] = 'Se eliminó correctamente el vehiculo';
            } else {
                $_SESSION['saveVehicle'] = 'Error al eliminar el vehiculo';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListVehicle');
    }

    public function DeleteCategory(){
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $category = new Category();
            $category->setId($id);
            if ($category->delete()){
                $_SESSION['saveCategory'] = 'Se eliminó correctamente la categoria';
            } else {
                $_SESSION['saveCategory'] = 'Error al eliminar la categoria';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListCategories');
    }

    /**
     * This function is called when the user clicks on the TodoList link in the sidebar. It checks if
     * the user is an admin, and if so, it loads the sidebar and the TodoList page.
     */
    public function TodoList()
    {
        Utils::isAdmin();

        require_once('views/layout/sidebar.php');
        require_once('views/admin/TodoList.php');
    }

    public function ViewListWorkOrder(){
        Utils::isAdmin();
        $workorder = new WorkOrder();
        $workorders = $workorder->getAll();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/order/viewListOrder.php');
        // require_once('views/admin/order/viewWorkOrder.php');
    }

    public function ViewWorkOrder(){
        Utils::isAdmin();
        $workorder = new WorkOrder();
        $workorders = $workorder->getAll();
        
        require_once('views/layout/sidebar.php');
        require_once('views/admin/order/viewWorkOrder.php');
    }

    public function AddWorkOrder() {
        Utils::isAdmin();
        
        $client  = new Account();
        $vehicle = new Vehicle();
        $service = new Service();

        $clients = $client->getAllClients();
        $mechanics = $client->getAllMechanics();
        $vehicles = $vehicle->getAll();
        $services = $service->getAll();
        // echo $services;
        // var_dump($services[0]->ID);
        require_once('views/layout/sidebar.php');
        require_once('views/admin/order/AddOrder.php');
    }

    public function SaveOrder(){

        
        Utils::isAdmin();
        if (isset($_POST)) {
            $patent_vehicle = isset($_POST['patent_vehicle']) ? trim($_POST['patent_vehicle']) : false;
            // $rut_client = isset($_POST['rut_client']) ? trim($_POST['rut_client']) : false;
            $rut_mechanic = isset($_POST['rut_mechanic']) ? trim($_POST['rut_mechanic']) : false;
            $observations = isset($_POST['observations']) ? trim($_POST['observations']) : false;
            // $service = isset($_POST['service']) ? trim($_POST['service']) : false;
            $status = isset($_POST['status']) ? trim($_POST['status']) : false;
            $services  = isset($_POST['services']) ? $_POST['services'] : [];
            // var_dump($services);

            if ($patent_vehicle  && $rut_mechanic && $observations && $services && $status) {
                $vehicle = new Vehicle();
                $vehicle = $vehicle->getByPatent($patent_vehicle);
                $rut_client = $vehicle->OWNER;

               

                $workorder = new WorkOrder();
                $workorder->setPatentVehicle($patent_vehicle);
                $workorder->setRutClient($rut_client);
                $workorder->setRutMechanic($rut_mechanic);
                $workorder->setObservations($observations);
                // $workorder->setService($service);
                $workorder->setStatus($status);

                
                if ($workorder->save()) {
                    // var_dump('esta es la order de trabajo', $workorder);
                    foreach ($services as $service){
                        // var_dump('ORDEN DE TRABAJO',intval($workorder->getId()));
                        // var_dump('valor de serivicio', $service);
                        $newService = new Wo_Service();
                        // $newService->setID();
                        $newService->setIdService(intval($service));
                        $newService->setIdWo($workorder->getLastId());
                        
                        $newService->save();
                        
                    }
                    $_SESSION['saveOrder'] = 'Se agregó correctamente la orden de trabajo';
                } else {
                    $_SESSION['saveOrder'] = 'Error al agregar la orden de trabajo';
                }
            } else {
                $_SESSION['saveOrder'] = 'Debes rellenar todos los campos';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListWorkOrder');
    }

    public function EditOrder() {
        Utils::isAdmin();
        if (isset($_GET['id'])) {
            $id = $_GET['id'];
            $workorder = new WorkOrder();
            $workorder->setId($id);
            $order = $workorder->getOne();
            $client  = new Account();
            $vehicle = new Vehicle();

            $clients = $client->getAllClients();
            $mechanics = $client->getAllMechanics();
            $vehicles = $vehicle->getAll();
            require_once('views/layout/sidebar.php');
            require_once('views/admin/order/EditOrder.php');
        }
    }

    public function ViewListCategories(){
        Utils::isAdmin();
        $category = new Category();
        $categories = $category->getAll();

        require_once('views/layout/sidebar.php');
        require_once('views/admin/category/viewList.php');
    }

    public function AddCategory(){
        Utils::isAdmin();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/category/addCategory.php');
    }

    public function saveCategory(){
        Utils::isAdmin();
        if(isset($_POST) && isset($_POST['name_category'])){
            $category = new Category();
            $category->setNameCategory($_POST['name_category']);
            $save = $category->save();
        }
        header('Location:' . APP_URL . 'admin/ViewListCategories');
    }

    public function UpdateCategory()
    {
        Utils::isAdmin();
        if (isset($_POST)) {
            $id = isset($_POST['id']) ? trim($_POST['id']) : false;
            $name = isset($_POST['name_category']) ? trim($_POST['name_category']) : false;

            
            if ($id && $name) {
                $category = new Category();
                $category->setId($_POST['id']);
                $category->setNameCategory($_POST['name_category']);


                if ($category->update()) {
                    $_SESSION['saveCategory'] = 'Se actualizó correctamente la categoria';
                } else {
                    $_SESSION['saveCategory'] = 'Error al editar la categoria';
                }
            } else {
                $_SESSION['saveCategory'] = 'Debes rellenar todos los campos';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListCategories');
    }

    public function EditCategory()
    {
        Utils::isAdmin();
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $category = new Category();
            $category = $category->getById($_GET['id']);
            require_once('views/layout/sidebar.php');
            require_once('views/admin/category/editCategory.php');
        }
    }

    public function ViewListSupplies()
    {
        Utils::isAdmin();
        $supply = new Supply();
        $supplies = $supply->getAll();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/supplies/ViewList.php');
    }

    public function AddSupply()
    {
        Utils::isAdmin();

        $category = new Category();
        $categories = $category->getAll();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/supplies/AddSupply.php');
    }

    public function deleteWorkOrder(){
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $workorder = new WorkOrder();
            $workorder->setId($id);
            if ($workorder->delete()){
                $_SESSION['saveCategory'] = 'Se eliminó correctamente la categoria';
            } else {
                $_SESSION['saveCategory'] = 'Error al eliminar la categoria';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListCategories');
    }

    public function EditSupply()
    {
        Utils::isAdmin();
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $supply = new Supply();
            $supply = $supply->getById($_GET['id']);
            require_once('views/layout/sidebar.php');
            require_once('views/admin/supplies/editSupply.php');
        }
    }

    public function DeleteSupply(){
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $supply = new Supply();
            $supply->setId($id);
            // var_dump($_GET['id_supply']);
            if ($supply->delete()){
                $_SESSION['saveCategory'] = 'Se eliminó correctamente la categoria';
            } else {
                $_SESSION['saveCategory'] = 'Error al eliminar la categoria';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListSupplies');
    }

   

    public function saveSupply() {
        Utils::isAdmin();
        if (isset($_POST)) {
          $id_category = isset($_POST['id_category']) ? trim($_POST['id_category']) : false;
          $name = isset($_POST['name']) ? trim(ucwords($_POST['name'])) : false;
          $description = isset($_POST['description']) ? trim($_POST['description']) : false;
          $stock = isset($_POST['stock']) ? trim($_POST['stock']) : false;

          
          if ($id_category && $name && $description && $stock) {
            $supply = new Supply();
            $supply->setIdCategory(Utils::sanitize($id_category));
            $supply->setName(Utils::sanitize($name));
            $supply->setDescription(Utils::sanitize($description));
            $supply->setStock(Utils::sanitize($stock));
            
            if (isset($_FILES['img'])) {
              $file = $_FILES['img'];
              $filename = $file['name'];
              $mimetype = $file['type'];
    
              if ($mimetype == 'image/jpg' || $mimetype == 'image/jpeg' || $mimetype == 'image/png') {
                if (!is_dir('uploads/')) {
                  mkdir('uploads', 0777, true);
                }
    
                $idCategory = Utils::query('CATEGORY', 'NAME_CATEGORY', 'ID', $id_category);
                $filename = Utils::clearString(strtolower(str_replace(' ', '-', $idCategory)) . '_' . strtolower(str_replace(' ', '-', $name)) . '.' . str_replace('image/', '', $mimetype));
    
                $image = 'uploads/' . $filename;
                move_uploaded_file($file['tmp_name'], $image);
                $supply->setImg($filename);
              }
            }
            
            if ($supply->save()) {
              $_SESSION['supply'] = 'complete';
            } else {
              $_SESSION['supply'] = 'failed';
            }
          } else {
            $_SESSION['supply'] = 'failed';
          }
        }
        header('Location:' . APP_URL . 'admin/ViewListSupplies');
      }

      public function saveService(){
        Utils::isAdmin();
        if(isset($_POST)){
            
            $name = isset($_POST['name']) ? trim(ucwords($_POST['name'])) : false;
            $description = isset($_POST['description']) ? trim($_POST['description']) : false;
            $price = isset($_POST['price']) ? trim($_POST['price']) : false;
            

            if($name && $description && $price){
                $service = new Service();
                $service->setName($_POST['name']);
                $service->setDescription($_POST['description']);
                $service->setPrice($_POST['price']);
                if($service->save()){
                    
                    $_SESSION['saveService'] = 'Se Agrego correctamente el servicio';
                }else{
                    $_SESSION['saveService'] = 'Error al agregar el servicio';
                }
        }
      }
      header('Location:' . APP_URL . 'admin/ViewListServices');
    }

    public function AddService()
    {
        Utils::isAdmin();
        $client  = new Account();
        // $services = $service->getAllService();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/service/addService.php');
    }

    public function EditService()
    {
        Utils::isAdmin();
        if (isset($_GET['id']) && !empty($_GET['id'])) {
            $service = new Service();
            $service = $service->getById($_GET['id']);
            require_once('views/layout/sidebar.php');
            require_once('views/admin/service/EditService.php');
        }
    }
    // public function UpdateCategory()
    // {
    //     Utils::isAdmin();
    //     if (isset($_POST)) {
    //         $id = isset($_POST['id']) ? trim($_POST['id']) : false;
    //         $name = isset($_POST['name_category']) ? trim($_POST['name_category']) : false;

            
    //         if ($id && $name) {
    //             $category = new Category();
    //             $category->setId($_POST['id']);
    //             $category->setNameCategory($_POST['name_category']);


    //             if ($category->update()) {
    //                 $_SESSION['saveCategory'] = 'Se actualizó correctamente la categoria';
    //             } else {
    //                 $_SESSION['saveCategory'] = 'Error al editar la categoria';
    //             }
    //         } else {
    //             $_SESSION['saveCategory'] = 'Debes rellenar todos los campos';
    //         }
    //     }
    //     header('Location:' . APP_URL . 'admin/ViewListCategories');
    // }


    public function UpdateService()
    {
        Utils::isAdmin();
        if (isset($_POST)) {
            $id = isset($_POST['id']) ? trim($_POST['id']) : false;
            $name = isset($_POST['name']) ? trim($_POST['name']) : false;
            $description = isset($_POST['description']) ? trim($_POST['description']) : false;
            $price = isset($_POST['price']) ? trim($_POST['price']) : false;
      

            if ($id && $name && $description && $price) {
                $service = new Service();
                $service->setId($_POST['id']);
                $service->setName($_POST['name']);
                $service->setDescription($_POST['description']);
                $service->setPrice($_POST['price']);

                if ($service->update()) {
                    $_SESSION['saveService'] = 'Se actualizó correctamente el servicio';
                } else {
                    $_SESSION['saveService'] = 'Error al editar el servicio';
                }
            } else {
                $_SESSION['saveService'] = 'Debes rellenar todos los campos';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListClient');
    }


    public function ViewListServices(){
        Utils::isAdmin();
        $service = new Service();
        $services = $service->getAll();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/service/ViewList.php');
    }

    public function DeleteService(){
        if (isset($_GET['id'])){
            $id = $_GET['id'];
            $service = new Service();
            $service->setId($id);
            if ($service->delete()){
                $_SESSION['saveService'] = 'Se eliminó correctamente el servicio';
            } else {
                $_SESSION['saveService'] = 'Error al eliminar el servicio';
            }
        }
        header('Location:' . APP_URL . 'admin/ViewListServices');
    }



      public function ViewCatalog() {
        Utils::isAdmin();
        $supply = new Supply();
        $supplies = $supply->getAll();

        require_once('views/layout/sidebar.php');

        require_once('views/admin/supplies/ViewSupply.php');
        // require_once('views/admin/supplies/ViewSupply.php');


        // require_once('views/'); 
      }

      public function Terms() {
        Utils::isAdmin();
        require_once('views/layout/sidebar.php');
        require_once('views/admin/termsAndConditions.php');
      }

   
  
    
}
