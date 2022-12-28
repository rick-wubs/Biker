<?php
    require_once('../php/class/database.class.php');

    class Fiets {
        public function read(){
            $db = new Database();
            $sql = "SELECT * FROM Fiets";
            $stmt = $db->conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function getFietsById($frameNr){
            $db = new Database();
            $sql = "SELECT * FROM Fiets WHERE FrameNr = :framenr";
            $stmt = $db->conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute(array('framenr' => $frameNr));
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            return $result;
        }
    }
