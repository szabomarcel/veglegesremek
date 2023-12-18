<?php
/*if (filter_input(INPUT_POST, "Adatmodositas", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
    $adatok = $_POST;
    var_dump($adatok);
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $name = htmlspecialchars(filter_input(INPUT_POST, "name"));
    $email = filter_input(INPUT_POST, "email");
    $jegyt = filter_input(INPUT_POST, "jegyt");
    $pass1 = filter_input(INPUT_POST, "password");
    $gender = filter_input(INPUT_POST, "gender");
    $date = filter_input(INPUT_POST, "date");
    if ($db->setKivalasztotttorlottfocista($id, $name, $email, $jegyt, $igazolvany, $pass1, $gender, $date)){
        echo '<p>Az adatok módosítása sikeres</p>';
        header("Location: index.php?menuItem=fooldal");
    } else {
        echo '<p>Az adatok módosítása sikertelen!</p>';
    }
}else{
    $adatok = $db->getKivalasztotttorlottfocista($id);
}
$adatok = $db->getKivalasztotttorlottfocista($id);
if (filter_input(INPUT_POST, "Egyszarvu", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
    $adatok = $_POST;
    var_dump($adatok);
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $name = htmlspecialchars(filter_input(INPUT_POST, "name"));
    $email = filter_input(INPUT_POST, "email");
    $jegyt = filter_input(INPUT_POST, "jegyt");
    $pass1 = filter_input(INPUT_POST, "password");
    $gender = filter_input(INPUT_POST, "gender");
    $date = filter_input(INPUT_POST, "date");
    if ($db->setKivalasztotttorlottfocista($id, $name, $email, $jegyt, $igazolvany, $pass1, $gender, $date)) {
        echo '<p>Az adatok módosítása sikeres</p>';
        header("Location: index.php?menuItem=fooldal");
    } else {
        echo '<p>Az adatok módosítása sikertelen!</p>';
    }
} else {
    $adatok = $db->getKivalasztottkerekpar($id, $name, $email, $jegyt, $igazolvany, $pass1, $gender, $date);
}*/
$id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
$name = htmlspecialchars(filter_input(INPUT_POST, "name"));
$email = filter_input(INPUT_POST, "email");
$jegyt = filter_input(INPUT_POST, "jegyt");
$pass1 = filter_input(INPUT_POST, "password");
$gender = filter_input(INPUT_POST, "gender");
$date = filter_input(INPUT_POST, "date");

if (filter_input(INPUT_POST, "Adatmodositas", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
    $adatok = $db->getKivalasztotttorlottfocista($id);
    var_dump($adatok);

    if ($db->setKivalasztotttorlottfocista($id, $name, $email, $jegyt, $pass1, $gender, $date)) {
        echo '<p>Az adatok módosítása sikeres</p>';
        header("Location: index.php?menuItem=fooldal");
        exit;
    } else {
        echo '<p>Az adatok módosítása sikertelen!</p>';
    }
} elseif (filter_input(INPUT_POST, "Egyszarvu", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
    $adatok = $db->getKivalasztottkerekpar($id);
    var_dump($adatok);

    if ($db->setKivalasztotttorlottfocista($id, $name, $email, $jegyt, $pass1, $gender, $date)) {
        echo '<p>Az adatok módosítása sikeres</p>';
        header("Location: index.php?menuItem=fooldal");
        exit;
    } else {
        echo '<p>Az adatok módosítása sikertelen!</p>';
    }
} else {
    // Ebben az ágban marad az eredeti $adatok értéke, ha nincs POST kérés
}
?>
<section class="text-center text-lg-start">
<!-- Jumbotron -->
<div class="container py-4">
    <div class="row g-0 align-items-center">
        <div class="col-lg-6 mb-5 mb-lg-0">
        <div class="cascading-right" style="background: hsla(0, 0%, 100%, 0.55); backdrop-filter: blur(30px);">
            <div class="card-body p-5 shadow-5 text-center">
                <h2 class="fw-bold mb-4">Felhasználó számára módositható adatok</h2>
                    <form method="post" action="index.php?menuItem=fooldal&id=<?php echo $adatok['id']; ?>" enctype="multipart/form-data">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label for="mennyiseg" style="color:white;" pattern="[1-100]{1}" required>Mennyiség: </label>
                                    <input type="number" id="mennyiseg" name="mennyiseg" placeholder="mennyiseg" value="<?php echo $adatok['mennyiseg']; ?>" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <label for="jegyt" class="form-label">Jegy módosítás:</label>
                                <div class="form-outline">
                                  <select id="jegyt" name="jegyt" required>
                                    <option value="egyedi" value="<?php echo $adatok['jegyt']; ?>" required>Egyedi jegy</option>
                                    <option value="csoportos" value="<?php echo $adatok['jegyt']; ?>" required>Csoportos jegy</option>
                                  </select>
                                </div>
                            </div>
                        </div>

                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label for="email" class="form-label">Email módosítás:</label>
                            <input type="email" class="form-control" name="email" id="email" value="<?php echo $adatok['email']; ?>" required>
                        </div>

                        <!-- Date input -->
                        <div class="form-outline mb-4">
                            <label for="date" class="form-label">Dátum módosítás:</label>
                            <input type="date" class="form-control" name="date" id="date" value="<?php echo $adatok['date']; ?>" required>
                        </div>

                        <!-- Submit button -->                        
                        <button type="submit" class="btn btn-info btn-block mb-4" value="1" name="Adatmodositas">Módosítás</button>
                        <button type="submit" class="btn btn-info btn-block mb-4" value="1" name="Egyszarvu">Törlés</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img src="kepek/csapatok/Fehervar.png" class="w-100 rounded-4 shadow-4" alt="kepek" />
        </div>
    </div>
</div>
</section>