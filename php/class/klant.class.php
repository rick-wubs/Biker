<?php
    require_once('../php/class/database.class.php');

    class Klant {
        public function read(){
            $db = new Database();
            $sql = "SELECT * FROM Klant";
            $stmt = $db->conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function huurovereenkomsten(){
            $db = new Database();
            $sql = "SELECT * FROM HuurovereenkomstenKlant";
            $stmt = $db->conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function getKlantById($klantNr){
            $db = new Database();
            $sql = "SELECT * FROM Klant WHERE KlantNr = :klantnr";
            $stmt = $db->conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute(array('klantnr' => $klantNr));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }

        public function trouweKlant($klantNr){
            $db = new Database();
            $sql = "SELECT * FROM TrouweKlanten WHERE KlantNr = :klantnr";
            $stmt = $db->conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute(array('klantnr' => $klantNr));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
    }
