<?php

class RendezVousModel {
    function getAll() {
        global $connexion;
        $sql = "SELECT * FROM rendezvous";
        $stmt = $connexion->query($sql);
        return $stmt->fetchAll();
    }

    function getById($id) {
        global $connexion;
        $sql = "SELECT * FROM rendezvous WHERE id = ?";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([(int)$id]);
        return $stmt->fetch();
    }

    function add($date, $heure, $description, $client_id) {
        global $connexion;
        $sql = "INSERT INTO rendezvous (dates, heure, descriptions, client_id) VALUES (?, ?, ?, ?)";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([
            htmlspecialchars($date),
            htmlspecialchars($heure),
            htmlspecialchars($description),
            (int)$client_id
        ]);
    }

    function update($id, $date, $heure, $description, $client_id) {
        global $connexion;
        $sql = "UPDATE rendezvous SET dates = ?, heure = ?, descriptions = ?, client_id = ? WHERE id = ?";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([
            htmlspecialchars($date),
            htmlspecialchars($heure),
            htmlspecialchars($description),
            (int)$client_id,
            (int)$id
        ]);
    }

    function delete($id) {
        global $connexion;
        $sql = "DELETE FROM rendezvous WHERE id = ?";
        $stmt = $connexion->prepare($sql);
        $stmt->execute([(int)$id]);
    }

    public function getRendezVousDetails($id)
{
    global $connexion;
    $sql = "
        SELECT 
            r.id, 
            r.dates, 
            r.heure, 
            r.descriptions, 
            c.nom AS client_nom, 
            c.prenom AS client_prenom, 
            c.telephone AS client_telephone, 
            c.email AS client_email
        FROM rendezvous r
        JOIN clients c ON r.client_id = c.id
        WHERE r.id = :id
    ";
    $stmt = $connexion->prepare($sql);
    $stmt->bindParam(':id', $id, PDO::PARAM_INT);
    $stmt->execute();
    return $stmt->fetch(PDO::FETCH_ASSOC);
}

public function getAllRendezVousWithClientEmail()
{
    global $connexion;
    $sql = "
        SELECT 
            r.id, 
            r.dates, 
            r.heure, 
            r.descriptions, 
            c.email AS client_email
        FROM rendezvous r
        JOIN clients c ON r.client_id = c.id
    ";
    $stmt = $connexion->prepare($sql);
    $stmt->execute();
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}


}

?>
