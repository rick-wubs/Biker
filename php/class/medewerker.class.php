<?php
    require_once('../php/class/database.class.php');

    class Medewerker {
        public function writeLog(){
            $db = new Database();
            $stmt = $db->conn->prepare("UPDATE Medewerker SET LaatsteLogin = GETDATE() WHERE Inlognaam = :loginname");
            $stmt->execute(array('loginname' => $_POST['inlognaam']));
        }

        public function login(){
            $db = new Database();
            $stmt = $db->conn->prepare("SELECT * FROM Medewerker WHERE Inlognaam = :loginname AND Wachtwoord = :password");
            $stmt->execute(array('loginname' => $_POST['inlognaam'], 'password' => $_POST['wachtwoord']));
            $result_array = $stmt->fetchAll(PDO::FETCH_ASSOC);
            if(count($result_array)){
                $this->writeLog();
                $_SESSION['user'] = $result_array[0]['Inlognaam'];
                header("Location: dashboard.php");
            } else {
                echo "Inlognaam / wachtwoord combinatie onjuist. Probeer het opnieuw."; exit;
            }
        }

        public function read(){
            $db = new Database();
            $sql = "SELECT *
                FROM Medewerker m
                INNER JOIN MedewerkerRol r on m.Inlognaam = r.Inlognaam
                WHERE m.Inlognaam = :loginname";
            $stmt = $db->conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute(array('loginname' => $_SESSION['user']));
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function getAll(){
            $db = new Database();
            $sql = "SELECT * FROM Medewerker WHERE Inlognaam <> :loginname";
            $stmt = $db->conn->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
            $stmt->execute(array('loginname' => 'admin'));
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }

        public function getOne($inlognaam){
            $db = new Database();
            $stmt = $db->conn->prepare("SELECT m.MedewerkerVoornaam, m.MedewerkerAchternaam, r.Rolnaam
                FROM Medewerker m
                INNER JOIN MedewerkerRol mr ON m.Inlognaam = mr.Inlognaam
                INNER JOIN Rol r ON mr.Rolnaam = r.Rolnaam
                WHERE m.Inlognaam = :loginname");
            $stmt->execute(array('loginname' => $inlognaam));
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $result;
        }
    }
