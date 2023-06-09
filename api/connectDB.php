<?php

class DatabaseConnection {
    // Connexion BDD
   private $dbhost;
   private $dbuser;
   private $dbpass;
   private $dbname;
   public $mysqli;
   public $connect;

   public function __construct ($dbhost = 'localhost', $dbuser = 'root', $dbpass = 'root', $dbname = 'maïtaï') {
        $this->dbhost = $dbhost;
        $this->dbuser = $dbuser;
        $this->dbpass = $dbpass;
        $this->dbname = $dbname;
        $this->mysqli = $this->connectionDB();
        $this->connect = $this->connect();
    }

    public function connectionDB () {
        $mysqli = new mysqli(
            $this->dbhost,
            $this->dbuser,
            $this->dbpass,
            $this->dbname
        );
        if($mysqli->connect_errno ) {
            printf("Connect failed: %s<br />", $mysqli->connect_error);
            exit();
        }
        return $mysqli;
    }

    public function connect() {
        if ($_SERVER["REQUEST_METHOD"] == "POST"){
            $username = $_REQUEST["mail"];
            $password = $_REQUEST["mdp"];

            $sql = $this->mysqli->prepare("SELECT prenom, id, id_personnel
                    FROM users 
                    WHERE mail=? 
                    AND mdp=MD5(?)");

            $sql->bind_param("ss", $username, $password);
            $sql->execute();

            $result = $sql->get_result();

            if (mysqli_num_rows($result) == 1) {
                foreach($result as $data){
                    return [$_SESSION['idUser'] = $data['id'], $_SESSION['prenom'] = $data['prenom'], $_SESSION['id_personnel'] = $data['id_personnel']];
                }
            } else {
                return $_SESSION['idUser'] = false;
            }
        }
    }
}

?>