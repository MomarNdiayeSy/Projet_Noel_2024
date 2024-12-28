<?php

    require_once('../app/models/etudiantModel.php');
    function index() {
        $etudiants = getAllE();
        require_once '../app/views/etudiants/index.php';
    }

    function pageAdd() {
        require_once '../app/views/etudiants/create.php';
    }

    function save() {
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $filiere = $_POST['filiere'];
        add($nom, $prenom, $email, $filiere);
        header('location:index.php?controller=etudiant');
    }

    function remove() {
        $id = $_GET['id'];
        delete($id);
        header('location:index.php?controller=etudiant');
    }

    function getEtudiant() {
        $id = $_GET['id'];
        $etudiant = pg_fetch_assoc(getById($id)); 
        require_once '../app/views/etudiants/edit.php';
    }

    function update() {
        $id = $_POST['id'];
        $nom = $_POST['nom'];
        $prenom = $_POST['prenom'];
        $email = $_POST['email'];
        $filiere = $_POST['filiere'];
        updateEtudiant($id, $nom, $prenom, $email, $filiere);
        header('location:index.php?controller=etudiant');
    }

    function show() {
        $id = $_GET['id'];
        $etudiant = pg_fetch_assoc(getById($id)); 
        require_once '../app/views/etudiants/show.php';
    }

?>
