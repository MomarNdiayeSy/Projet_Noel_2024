<?php
    require_once('../app/db.php');

    function getAll() {
    global $connexion;
    $sql = "SELECT * FROM cours";
    $result = pg_query($connexion, $sql);
    return pg_fetch_all($result);
}


    function getByIdC($id) {
        global $connexion;
        $sql = "SELECT * FROM cours WHERE id = $id";
        return pg_query($connexion,$sql);
    }

    function addC($nom_du_cours, $code_du_cours, $nombre_d_heures ) {
        global $connexion;
        $sql = "INSERT INTO cours (nom_du_cours, code_du_cours, nombre_d_heures ) VALUES ('$nom_du_cours', '$code_du_cours', '$nombre_d_heures')";
        return pg_query($connexion,$sql);
    }

    function updateC($id, $nom_du_cours, $code_du_cours, $nombre_d_heures) {
        global $connexion;
        $sql = "UPDATE cours SET nom_du_cours = '$nom_du_cours', code_du_cours = '$code_du_cours', nombre_d_heures = '$nombre_d_heures' WHERE id = $id";
        return pg_query($connexion,$sql);
    }

    function deleteC($id) {
        global $connexion;
        $sql = "DELETE FROM cours WHERE id = $id ";
        return pg_query($connexion,$sql);
    }

?>
