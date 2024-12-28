<?php

class ClientsModel {
    function getAll() {
        global $connexion;
        $sql = "SELECT * FROM clients";
        $stmt = $connexion->query($sql);
        return $stmt->fetchAll();
    }

    function getById($id) {
        global $connexion;
        $sql = "SELECT * FROM clients WHERE id = ?";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([(int)$id]);
        return $stmt->fetch();
    }

    function add($nom, $prenom, $email, $telephone) {
        global $connexion;
        $sql = "INSERT INTO clients (nom, prenom, email, telephone) VALUES (?, ?, ?, ?)";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([
            htmlspecialchars($nom),
            htmlspecialchars($prenom),
            htmlspecialchars($email),
            htmlspecialchars($telephone)
        ]);
    }

    function update($id, $nom, $prenom, $email, $telephone) {
        global $connexion;
        $sql = "UPDATE clients SET nom = ?, prenom = ?, email = ?, telephone = ? WHERE id = ?";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([
            htmlspecialchars($nom),
            htmlspecialchars($prenom),
            htmlspecialchars($email),
            htmlspecialchars($telephone),
            (int)$id
        ]);
    }

    function delete($id) {
        global $connexion;
        $sql = "DELETE FROM clients WHERE id = ?";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([(int)$id]);
    }
}

?>
