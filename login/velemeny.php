<!--INSERT INTO `velemeny`(`nev_id`, `komment`, `csillag`) VALUES ('[value-1]','[value-2]','[value-3]')-->
<?php
  if(isset($_POST["addComment()"])) {
      $nev_id = filter_input(INPUT_POST, "nev_id", FILTER_SANITIZE_STRING);
      $komment = filter_input(INPUT_POST, "komment", FILTER_SANITIZE_STRING);
      $csillag = filter_input(INPUT_POST, "csillag", FILTER_VALIDATE_INT);
      
      if($nev_id === $id){
        //-- regisztráció inditása
        $db->setVelemenyText($nev_id, $komment, $csillag);
        header("Location: index.php"); // Átvált a nyitólapra.
        exit();
      } else {
        echo '<p>Nem egyezik meg a jelszó</p>';
      }
  }

  // Megjelenítés táblázat formájában
  if ($result->num_rows > 0) {
      echo "<table><tr><th>ID</th><th>Megjegyzés</th><th>Csillag</th><th>Törlés</th></tr>";
      while($row = $result->fetch_assoc()) {
          echo "<tr><td>" . $row["nev_id"] . "</td><td>" . $row["komment"] . "</td><td>" . $row["csillag"] . "</td><td><form method='post' action='#'>
          <input type='hidden' name='delete_comment' value='" . $row["nev_id"] . "'>
          <button type='submit'>Törlés</button></form></td></tr>";
      }
      echo "</table>";
  } else {
      echo "Nincs megjegyzés.";
  }
  $conn->close();
?>