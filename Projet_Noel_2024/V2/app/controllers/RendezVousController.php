<?php

class RendezVousController {
    function index() {
        global $rendezVousModel;
        $rendezVous = $rendezVousModel->getAll();
        $rendezVous = $rendezVousModel->getAllRendezVousWithClientEmail();
        require_once '../app/views/rendezvous/index.php';
    }

    function remove() {
        global $rendezVousModel;
        $id = $_GET['id'];
        $rendezVousModel->delete($id);
        header('Location: index.php?controller=rendezvous');
    }

    function pageAdd() {
        global $clientsModel;
        $clients = $clientsModel->getAll();
        require_once '../app/views/rendezvous/create.php';
    }

    function save() {
        global $rendezVousModel;
        $date = $_POST['dates'];
        $heure = $_POST['heure'];
        $description = $_POST['descriptions'];
        $client_id = $_POST['client_id'];

        $rendezVousModel->add($date, $heure, $description, $client_id);
        header('Location: index.php?controller=rendezvous');
    }

    function getRendezVous() {
        global $rendezVousModel, $clientsModel;
        $id = $_GET['id'];
        $rendezVous = $rendezVousModel->getById($id);
        $clients = $clientsModel->getAll();
        require_once '../app/views/rendezvous/edit.php';
    }

    function update() {
        global $rendezVousModel;
        $id = $_POST['id'];
        $date = $_POST['dates'];
        $heure = $_POST['heure'];
        $description = $_POST['descriptions'];
        $client_id = $_POST['client_id'];

        $rendezVousModel->update($id, $date, $heure, $description, $client_id);
        header('Location: index.php?controller=rendezvous');
    }

    // function shows() {
    //     global $rendezVousModel;
    //     $id = $_GET['id'];
    //     $rendezVous = $rendezVousModel->getById($id);
    //     require_once './views/rendezvous/show.php';
    // }

    public function show(){
            global $rendezVousModel;
            if (isset($_GET['id'])) {
                $id = intval($_GET['id']);
                $rendezVous = $rendezVousModel->getRendezVousDetails($id);
                
                if ($rendezVous) {
                    require '../app/views/rendezvous/show.php';
                } else {
                    echo "Rendez-vous non trouvé.";
                }
            } else {
                echo "ID du rendez-vous manquant.";
            }
        }
        

}

?>
