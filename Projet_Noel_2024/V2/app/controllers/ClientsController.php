<?php

class ClientsController {
    function index() {
        global $clientsModel;
        $clients = $clientsModel->getAll();
        require_once '../app/views/clients/index.php';
    }

    function remove() {
        global $clientsModel;
        $id = $_GET['id'];
        $clientsModel->delete($id);
        header('Location: index.php?controller=clients');
    }

    function pageAdd() {
        require_once '../app/views/clients/create.php';
    }

    function save() {
        global $clientsModel;
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];

        $clientsModel->add($nom, $prenom, $email, $telephone);
        header('Location: index.php?controller=clients');
    }

    function getClient() {
        global $clientsModel;
        $id = $_GET['id'];
        $client = $clientsModel->getById($id);
        require_once '../app/views/clients/edit.php';
    }

    function update() {
        global $clientsModel;
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $telephone = $_POST['telephone'];

        $clientsModel->update($id, $nom, $prenom, $email, $telephone);
        header('Location: index.php?controller=clients');
    }

    function show() {
        global $clientsModel;
        $id = $_GET['id'];
        $client = $clientsModel->getById($id);
        require_once '../app/views/clients/show.php';
    }
}

?>
