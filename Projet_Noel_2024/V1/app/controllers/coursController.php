<?php
    require_once('../app/models/coursModel.php');

    function indexC() {
        $cours = getAll();
        require_once '../app/views/cours/index.php';
    }

    function removeC() {
        $id = $_GET['id'];
        deleteC($id);
        header('Location: index.php?controller=cours');
    }

    function pageAddC() {
        require_once '../app/views/cours/create.php';
    }

    function saveC() {
        $nom_du_cours = $_POST['nom_du_cours'];
        $code_du_cours = $_POST['code_du_cours'];
        $nombre_d_heures = $_POST['nombre_d_heures'];
        addC($nom_du_cours, $code_du_cours, $nombre_d_heures);
        header('Location: index.php?controller=cours');
    }

    function getCours() {
        $id = $_GET['id'];
        $cours = pg_fetch_assoc(getByIdC($id)); 
        require_once '../app/views/cours/edit.php';
    }

    function updateCours() {
        $id = $_POST['id'];
        $nom_du_cours = $_POST['nom_du_cours'];
        $code_du_cours = $_POST['code_du_cours'];
        $nombre_d_heures = $_POST['nombre_d_heures'];
        updateC($id, $nom_du_cours, $code_du_cours, $nombre_d_heures);
        header('Location: index.php?controller=cours');
    }

    function showC() {
        $id = $_GET['id'];
        $cours = pg_fetch_assoc(getByIdC($id)); 
        require_once '../app/views/cours/show.php';
    }

?>