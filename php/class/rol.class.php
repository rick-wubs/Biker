<?php
    require_once('../php/class/database.class.php');

    class Rol {
        public function read(){
            $db = new Database();
            $sql = "SELECT * FROM Rol WHERE Rolnaam <> :rolnaam";
            $stmt = $db->conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute(array(':rolnaam' => 'Administrator'));
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function create($rolnaam, $inlognaam){
            $db = new Database();
            $sql = "INSERT INTO MedewerkerRol VALUES(:rolnaam, :inlognaam)";
            $stmt = $db->conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute(array(':rolnaam' => $rolnaam, ':inlognaam' => $inlognaam));
        }

        public function delete($rolnaam, $inlognaam){
            $db = new Database();
            $sql = "DELETE FROM MedewerkerRol
                WHERE Rolnaam = :rolnaam
                AND Inlognaam = :inlognaam";
            $stmt = $db->conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute(array(':rolnaam' => $rolnaam, ':inlognaam' => $inlognaam));
        }
    }
?>
