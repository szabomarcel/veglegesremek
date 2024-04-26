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
                $_SESSION['name'] = $row['name'];                                                           
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

    public function register($id, $name, $email, $jegyt, $mennyiseg, $igazolvany, $pass1, $merkozes, $date) {
        
        //$password = password_hash($pass, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare('INSERT INTO `users`(`id`, `name`, `email`, `jegyt`, `mennyiseg`, `igazolvany`, `password`, `merkozes`, `date`) VALUES (?,?,?,?,?,?,?,?,?)');
        $stmt->bind_param("issssssss", $id, $name, $email, $jegyt, $mennyiseg, $igazolvany, $pass1, $merkozes, $date);
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

    public function setKivalasztottfocista($igazolvany, $email, $date, $mennyiseg, $jegyt, $as) {
        $stmt = $this->db->prepare("UPDATE `users` SET `igazolvany`= ?, `email`= ?, `date`= ?, `mennyiseg`= ?, `jegyt`= ? WHERE `name`= ?");
        $stmt->bind_param('ssssss',$igazolvany, $email, $date, $mennyiseg, $jegyt, $as);
        return $stmt->execute();
    }
    
    public function setKivalasztotttorlottfocista($nevette) {
        $stmt = $this->db->prepare("DELETE FROM `users` WHERE `name`= ?");
        $stmt->bind_param('s', $nevette);
        return $stmt->execute();
    }

     
    public function getKivalasztotttorlottfocistaid($a) {
        $result = $this->db->query("SELECT * FROM `users` WHERE `name`= ".$a);
        return $result->fetch_assoc();
    }

    /*#####################*/
    /****** Vélemény *******/
    /*#####################*/

    public function setVelemenyText($name, $comment, $csillag){
        $stmt = $this->db->prepare("INSERT INTO `velemeny`(`name`, `comment`, `csillag`) VALUES ('?', '?', '?',)");
        $stmt->bind_param("sss", $name, $comment, $csillag);
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

    /*#####################*/
    /****** Bank kártya *******/
    /*#####################*/

    public function card($card_id, $cardname, $cardnumber, $expiration_date, $CVV) {
        $stmt = $this->db->prepare("INSERT INTO `card` (`card_id`, `cardname`, `cardnumber`, `expiration_date`, `CVV`) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("issss", $card_id, $cardname, $cardnumber, $expiration_date, $CVV);
        if ($stmt->execute()) {
            //echo $stmt->affected_rows();
            $_SESSION['cardname'] = true;
            echo '<p>Rögzítés sikeres!</p>';
            //header("Location: index.php");
        } else {
            $_SESSION['cardnem'] = false;
            echo '<p>Rögzítés sikertelen!</p>';
        }
    }
}