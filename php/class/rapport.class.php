<?php
    require_once('../php/class/database.class.php');

    class Rapport {
        public function getDataByView($viewName){
            $db = new Database();
            $sql = "SELECT * FROM " . $viewName;
            $stmt = $db->conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute();
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
