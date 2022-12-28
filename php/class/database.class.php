<?php
    class Database {
        public $conn;

        public function __construct() {
            $serverName = "(local)\sqlexpress";

            try
            {
                $this->conn = new PDO( "sqlsrv:server=$serverName ; Database=BIKER", "", "");
                $this->conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
            }
            catch(Exception $e)
            {
                die( print_r( $e->getMessage() ) );
            }
        }
    }
?>
