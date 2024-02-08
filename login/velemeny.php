<!--INSERT INTO `velemeny`(`nev_id`, `komment`, `csillag`) VALUES ('[value-1]','[value-2]','[value-3]')-->
<?php

if (isset($_SESSION['users']) && isset($_SESSION['users']['id'])) {
    $userid = $_SESSION['users']['id'];
    
    // Further code...

    if (filter_input(INPUT_POST, "velemeny", FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE)) {
        // Your processing code...
        $bicikli_id = filter_input(INPUT_POST, "nev_id", FILTER_VALIDATE_INT);
        $userid = $_SESSION['users']['id'];
        echo 'rögzités';
        
        // Assuming $db represents your database object
        if ($db->setVelemenyText($nev_id, $komment, $csillag)) {
            header("Location: index.php?menu=home");
        } else {
            echo 'Sikertelen rögzítés!';
        }
    }else{
        header("Location: login.php");
        exit(); // Stop script execution
    }
}

// Megjelenítés táblázat formájában
if ($result->num_rows > 0) {
    echo "<table><tr><th>ID</th><th>Megjegyzés</th><th>Csillag</th><th>Törlés</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["nev_id"] . "</td><td>" . $row["komment"] . "</td><td>" . $row["csillag"] . "</td><td><form method='post' action='#'>
        <input type='hidden' name='delete_comment' value='" . $row["id"] . "'>
        <button type='submit'>Törlés</button></form></td></tr>";
    }
    echo "</table>";
} else {
    echo "Nincs megjegyzés.";
}

$conn->close();
?>