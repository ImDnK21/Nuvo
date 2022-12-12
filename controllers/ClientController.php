<?php

require_once('models/account.php');
require_once('models/vehicle.php');
require_once('models/workorder.php');


class ClientController{
    public function view(){
        utils::isAuth();

        $vehicle = new Vehicle();
        $vehicle = $vehicle->getByOwner($_SESSION['logged']->RUT);

        require_once('views/layout/sidebarClient.php');

        if ($vehicle != NULL) {
            require_once('views/client/vehicle/index.php');
        } else {
            require_once('views/client/vehicle/error.php');
            // die('error');
        }
    }

    public function personalInformation(){
        utils::isAuth();

        $account = new Account();
        $account->setRut($_SESSION['logged']->RUT);
        $_SESSION['logged'] = $account->getProfile();
        // $perfil = $account->getProfile();
        
        require_once('views/layout/sidebarClient.php');
        require_once('views/client/vehicle/personalInformation.php');


    }

    public function save() {
        Utils::isAdmin();
        if (isset($_POST)) {
            $rut = isset($_POST['rut']) ? $_POST['rut'] : false;
            $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false;
            $firstname = isset($_POST['firstname']) ? $_POST['firstname'] : false;
            $lastname = isset($_POST['lastname']) ? $_POST['lastname'] : false;
            $second_lastname = isset($_POST['second_lastname']) ? $_POST['second_lastname'] : false;
            $phone = isset($_POST['phone']) ? $_POST['phone'] : false;
            $email = isset($_POST['email']) ? $_POST['email'] : false;

            if ($rut && $lastname && $firstname && $lastname && $phone && $email) {
                $client = new Account();
                $client->setRut($rut);
                $client->setRole('client');
                $client->setFirstname($firstname);
                $client->setLastname($lastname);
                $client->setPhone($phone);
                $client->setEmail($email);

                if ($client->save()) {
                    $_SESSION['signup_message'] = 'Usuario creado correctamente';
                    $_SESSION['signup_message_type'] = 'success';
                } else {
                    $_SESSION['signup_message'] = 'Error al crear el usuario';
                    $_SESSION['signup_message_type'] = 'danger';
                }
            } else {
                $_SESSION['signup_message'] = 'Todos los campos son obligatorios';
                $_SESSION['signup_message_type'] = 'danger';
            }
        } else {
            $_SESSION['signup_message'] = 'Las Contraseñas no coinciden';
            $_SESSION['signup_message_type'] = 'danger';
        }
        header("Location:" . APP_URL . 'client/list.php');
    }

    public function viewInfo() {
        Utils::isAuth();

        require_once('views/layout/sidebarClient.php');
        require_once('views/client/vehicle/index.php');
    }

    public function viewRequestedService(){
        Utils::isAuth();
        require_once('views/layout/sidebarClient.php');
        require_once('views/client/vehicle/requestedService.php');
    }

    public function ViewVehicleOwner()
    {

        $vehicle = new Vehicle();
        // $vehicle = $vehicle->getByPatent($vehicle->PATENT);
        


        // $vehicle = new Vehicle();
        // $vehicles = $vehicle->getAll();

        
        require_once('views/layout/sidebar.php');
        require_once('views/admin/vehicle/ViewList.php');
    }

    public function DatosVehiculo (){
        Utils::isAuth();
        $vehicle = new Vehicle();
        $vehicle->setPatent($_SESSION['logged']->PATENT);
        $_SESSION['logged'] = $vehicle->getAll();
        require_once('views/layout/sidebarClient.php');
        require_once('views/client/vehicle/DatosVehiculo.php');

    }

    public function ClientWorkOrder(){
        Utils::isAuth();
        $workorder = new WorkOrder();
        $client = new Account();
        $workorders = $workorder->getByRut($_SESSION['logged']->RUT);
        //if does not exist work order show error
        if ($workorders == NULL) {
            require_once('views/layout/sidebarClient.php');
            require_once('views/client/vehicle/errorWO.php');
        } else {
            require_once('views/layout/sidebarClient.php');
            require_once('views/client/vehicle/ClientWorkOrder.php');
        }
   
    }











}
