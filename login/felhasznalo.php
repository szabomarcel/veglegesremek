<?php
if (filter_input(INPUT_POST, "Adatmodositas", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
    $adatok = $_POST;
    var_dump($adatok);
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    $igazolvany = filter_input(INPUT_POST, "igazolvany");
    $email = filter_input(INPUT_POST, "email");
    $date = filter_input(INPUT_POST, "date");
    $mennyiseg = filter_input(INPUT_POST, "mennyiseg");
    $jegyt = filter_input(INPUT_POST, "jegyt");
    $from = null;
    $to = null;
    if ($db->setKivalasztottfocista($id, $igazolvany, $email, $date, $mennyiseg, $jegyt)) {
        echo '<p>Az adatok módosítása sikeres</p>';
        header("Location: index.php?menuItem=fooldal");
    } else {
        echo '<p>Az adatok módosítása sikertelen!</p>';
    }
} else {
    $id = $_POST['id'] ?? null;
    $igazolvany = $_POST['igazolvany'] ?? null;
    $email = $_POST['email'] ?? null;
    $date = $_POST['date'] ?? null;
    $mennyiseg = $_POST['mennyiseg'] ?? null;
    $jegyt = $_POST['jegyt'] ?? null;
    $adatok = $db->setKivalasztottfocista($id, $igazolvany, $email, $date, $mennyiseg, $jegyt);
}
$adatok = $db->setKivalasztottfocista($id, $igazolvany, $email, $date, $mennyiseg, $jegyt);

if (filter_input(INPUT_POST, "Egyszarvu", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
    $adatok = $_POST;
    var_dump($adatok);
    $id = filter_input(INPUT_POST, "id", FILTER_SANITIZE_NUMBER_INT);
    if ($db->setKivalasztotttorlottfocista($id = 0)) {
        echo '<p>Az adat sikeresesn törölve</p>';
        header("Location: index.php?menuItem=register");
    } else {
        echo '<p>Az adat sikertelen törlése!</p>';
    }
} else {
    $adatok = $db->getKivalasztotttorlottfocista($id);
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
                        <div class="form-outline mb-4">
                            <!--<label for="igazolvany" class="form-label" style="color:white;">Igazolvanyszam: </label>-->
                            <label class="form-label" for="form3Example8">Írja be az igazolvány számát</label>
                            <input type="text" class="form-control form-control-lg" id="igazolvany" name="igazolvany" placeholder="123456AB" pattern="[1-9]{1}[0-9]{5}[A-Za-z]{2}" value="<?php echo $adatok['igazolvany']; ?>" required>
                        </div>
                        <div class="row">
                            <!-- Email input -->
                            <div class="col-md-6 form-outline mb-4">
                                <label for="email" class="form-label">Email módosítás:</label>
                                <input type="email" class="form-control form-control-lg" name="email" id="email" value="<?php echo $adatok['email']; ?>" required>
                            </div>
    
                            <!-- Date input -->
                            <div class="col-md-6 form-outline mb-4">
                                <label for="date" class="form-label">Dátum módosítás:</label>
                                <input type="date" class="form-control form-control-lg" name="date" id="date" value="<?php echo $adatok['date']; ?>" required>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label for="mennyiseg" class="form-label">Mennyiség módosítás:</label>
                                    <label for="mennyiseg" style="color:white;" pattern="[1-100]{1}" required>Mennyiség: </label>
                                    <input type="number" id="mennyiseg" name="mennyiseg" placeholder="mennyiseg" value="<?php echo $adatok['mennyiseg']; ?>" class="form-control form-control-lg" required>
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <label for="jegyt" class="form-label">Jegy módosítás:</label>
                                <div class="form-outline form-control-lg">
                                  <select id="jegyt" name="jegyt" class="form-control form-control-lg" required>
                                    <option value="egyedi" value="<?php echo $adatok['jegyt']; ?>" required>Egyedi jegy</option>
                                    <option value="csoportos" value="<?php echo $adatok['jegyt']; ?>" required>Csoportos jegy</option>
                                  </select>
                                </div>
                            </div>
                        </div>
                        <!-- Submit button -->     
                        <!-- HTML form for collecting credit card information -->
                        <!--<form action="credit.php" method="POST">
                            <script
                                src="https://checkout.stripe.com/checkout.js" class="stripe-button"
                                data-key="your_publishable_key"
                                data-amount="1100"
                                data-currency="huf"
                                data-name="Your Company Name"
                                data-description="Example charge"
                                data-locale="auto"
                            ></script>
                        </form>-->         
                        <a href="index.php?menuItem=card&gender=<?php echo $adatok['gender'];?>" class="btn btn-info btn-block mb-4">Vásárlás</a>                        
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