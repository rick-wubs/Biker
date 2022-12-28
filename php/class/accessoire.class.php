<?php
    require_once('../php/class/database.class.php');

    class Accessoire {
        public function read(){
            $db = new Database();
            $sql = "SELECT * FROM Accessoire";
            $stmt = $db->conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function getAccessoireById($barcode){
            $db = new Database();
            $sql = "SELECT * FROM Accessoire WHERE barcode = :barcode";
            $stmt = $db->conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute(array('barcode' => $barcode));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
    }
