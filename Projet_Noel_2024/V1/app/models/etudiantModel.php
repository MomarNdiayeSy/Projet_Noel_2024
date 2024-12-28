<?php
     require_once('../app/db.php');

    function getAllE() {
        global $connexion;
        $sql = "SELECT * FROM etudiants";
        $result = pg_query($connexion, $sql);
        return pg_fetch_all($result);
    }

    function delete($id) {
        global $connexion;
        $sql = "DELETE FROM etudiants WHERE id = $id";
        return pg_query($connexion,$sql);
    }

    function add($nom, $prenom, $email, $filiere) {
        global $connexion;
        $sql = "INSERT INTO etudiants (nom, prenom, email, filiere) VALUES ('$nom', '$prenom', '$email', '$filiere')";
        return pg_query($connexion,$sql);
    }

    function updateEtudiant($id, $nom, $prenom, $email, $filiere) {
        global $connexion;
        $sql = "UPDATE etudiants SET nom = '$nom', prenom = '$prenom', email = '$email', filiere = '$filiere' WHERE id = $id";
        return pg_query($connexion,$sql);
    }

    function getById($id) {
        global $connexion;
        $sql = "SELECT * FROM etudiants WHERE id = $id";
        return pg_query($connexion,$sql);
    }

?>
