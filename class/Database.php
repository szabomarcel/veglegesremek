<?php
class Database {
    private $db = null;
    public $error = false;
    public function __construct($host, $name, $pass1, $db) {
        try {
            $this->db = new mysqli($host, $name, $pass1, $db);
            $this->db->set_charset("utf8");
        } catch (Exception $exc) {
            $this->error = true;
            echo '<p>Az adatbázis nem elérhető!</p>';
            exit();
        }
    }
    public function login($name, $pass) {
        //-- jelezzük a végrehajtandó SQL parancsot
        $stmt = $this->db->prepare('SELECT * FROM users WHERE users.name LIKE ?;');
        //-- elküldjük a végrehajtáshoz szükséges adatokat
        $stmt->bind_param("s", $name);
        if ($stmt->execute()) {
            //-- sikeres végrehajtás után lekérjük az adatokat
            $result = $stmt->get_result();
            $row = $result->fetch_assoc();
            if ($pass == $row['password']) {
                //-- felhasználónév és jelszó helyes
                $_SESSION['name'] = $row;
                $_SESSION['login'] = true;
            } else {
                $_SESSION['name'] = '';
                $_SESSION['login'] = false;
            }
            // Free result set
            $result->free_result();
            header("Location:index.php");
        }
        return false;
    }

    public function register($id, $name, $email, $jegyt, $mennyiseg, $igazolvany, $pass1, $gender, $date) {
        
        //$password = password_hash($pass, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare('INSERT INTO `users`(`id`, `name`, `email`, `jegyt`, `mennyiseg`, `igazolvany`, `password`, `gender`, `date`) VALUES (?,?,?,?,?,?,?,?,?)');
        $stmt->bind_param("issssssss", $id, $name, $email, $jegyt, $mennyiseg, $igazolvany, $pass1, $gender, $date);
        if ($stmt->execute()) {
            //echo $stmt->affected_rows();
            $_SESSION['login'] = true;
            //header("Location: index.php");
        } else {
            $_SESSION['login'] = false;
            echo '<p>Rögzítés sikertelen!</p>';
        }
    }

    /*public function valasztos() {
        $result = $this->db->query("SELECT * FROM `focistanevek`");
        return $result->fetch_all(MYSQLI_ASSOC);
    }*/

    public function setKivalasztottfocista($id, $igazolvany, $email, $date, $mennyiseg, $jegyt) {
        $stmt = $this->db->prepare("UPDATE `users` SET `igazolvany`= ?,`email`= ?, `date`= ?,`mennyiseg`= ?, `jegyt`= ? WHERE id= ?");
        $stmt->bind_param('sssssi',$igazolvany, $email, $date, $mennyiseg, $jegyt, $id);
        return $stmt->execute();
    }
    
    public function setKivalasztotttorlottfocista($id) {
        $stmt = $this->db->prepare("DELETE FROM `users` WHERE `users`.`id`= ?;");
        $stmt->bind_param('i', $id);
        return $stmt->execute();
    }

    public function getKivalasztotttorlottfocista($id) {
        $result = $this->db->query("SELECT * FROM `users` WHERE `id`" . $id);
        return $result->fetch_assoc();
    }  

    /*public function velemeny($nev_id, $komment, $csillag){
        // Megjegyzések lekérdezése az adatbázisból
        $sql = $this->db->prepare("SELECT * FROM `velemeny` WHERE nev_id=".$nev_id);
        $result = $conn->query($sql);
        $stmt->bind_param("iss", $nev_id, $komment, $csillag);
    }*/

    public function setVelemenyText($velemeny_id, $name, $comment, $date, $reply_id, $csillag){
        $stmt = $this->db->prepare("INSERT INTO `velemeny`(`velemeny_id`, `name`, `comment`, `date`, `reply_id`, `csillag`) VALUES ('?','?','?','?','?','?')");
        $stmt->bind_param("isssss", $velemeny_id, $name, $comment, $date, $reply_id, $csillag);
        if ($stmt->execute() === TRUE) {
            echo "A megjegyzés sikeresen hozzáadva az adatbázishoz.";
        } else {
            echo "Hiba történt a megjegyzés hozzáadásakor: " . $stmt->error;
        } 
    }

    public function getVelemenyTorlo($velemeny_id){
        $stmt = $this->db->prepare("DELETE FROM `velemeny` WHERE velemeny_id=" . $velemeny_id); 
        $stmt -> bind_param("i", $velemeny_id);
        return $stmt->execute();
    }
}