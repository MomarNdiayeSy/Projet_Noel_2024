<?php

class Database {
    private $host = "localhost";
    private $port = "5432";
    private $user = "postgres";
    private $password = "passer";
    private $dbname = "Projet_Noel_2024";

    public function getConnexion() {
        try {
            $connexion = new PDO("pgsql:host=$this->host;port=$this->port;dbname=$this->dbname", $this->user, $this->password);
            $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            return $connexion;
        } catch (PDOException $e) {
            die("Connexion échouée : " . $e->getMessage());
        }
    }
}
?>
