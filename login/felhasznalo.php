<?php
try {
    $adatok2 = $db->getKivalasztotttorlottfocistaid('"'.$_SESSION['name'].'"');
    /*var_dump($adatok2);
    echo"<br>";
    var_dump($_SESSION['name']);
    echo"<br>";
    var_dump($adatok2['mennyiseg']);*/
} catch (\Throwable $th) {
    $adatok2 = null;
}
try {
    if (filter_input(INPUT_POST, "Adatmodositas", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
        $igazolvany = filter_input(INPUT_POST, "igazolvany");
        $email = filter_input(INPUT_POST, "email");
        $date = filter_input(INPUT_POST, "date");
        $mennyiseg = filter_input(INPUT_POST, "mennyiseg");
        $jegyt = filter_input(INPUT_POST, "jegyt");  
        if ($db->setKivalasztottfocista($igazolvany, $email, $date, $mennyiseg, $jegyt, $_SESSION['name'])) {
            echo '<p>Az adatok módosítása sikeres</p>'; 
            header("Location: index.php?menuItem=felhasznalo#");
            exit();
        }else {        
            echo '<p>Az adatok módosítása sikertelen!</p>';        
        }       
    } 
} catch (\Throwable $th) {
    echo $th;    
}

if (filter_input(INPUT_POST, "Egyszarvu", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)) {
    
    if ($db->setKivalasztotttorlottfocista($_SESSION['name'])) {
        echo '<p>Az adat sikeresesn törölve</p>';
        $_SESSION['login'] = false;
        header("Location: index.php?menuItem=register");
    } else {
        echo '<p>Az adat törlése sikertelen!</p>';
    }
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
                    <form method="POST" action="#" enctype="multipart/form-data">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <div class="form-outline mb-4">
                            <!--<label for="igazolvany" class="form-label" style="color:white;">Igazolvanyszam: </label>-->
                            <label class="form-label" for="form3Example8">Írja be az igazolvány számát</label>
                            <input type="text" class="form-control form-control-lg" id="igazolvany" name="igazolvany" placeholder="123456AB" pattern="[1-9]{1}[0-9]{5}[A-Za-z]{2}" value="<?php echo $adatok2['igazolvany']; ?>" >
                        </div>
                        <div class="row">
                            <!-- Email input -->
                            <div class="col-md-6 form-outline mb-4">
                                <label for="email" class="form-label">Email módosítás:</label>
                                <input type="email" class="form-control form-control-lg" name="email" id="email" value="<?php echo $adatok2['email']; ?>" >
                            </div>
    
                            <!-- Date input -->
                            <div class="col-md-6 form-outline mb-4">
                                <label for="date" class="form-label">Dátum módosítás:</label>
                                <input type="date" class="form-control form-control-lg" name="date" id="date" value="<?php echo $adatok2['date']; ?>" >
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-6 mb-4">
                                <div class="form-outline">
                                    <label for="mennyiseg" class="form-label">Mennyiség módosítás:</label>
                                    <label for="mennyiseg" style="color:white;" pattern="[1-100]{1}" >Mennyiség: </label>
                                    <input type="text" id="mennyiseg" name="mennyiseg" placeholder="mennyiseg" value="<?php echo $adatok2['mennyiseg']; ?>" class="form-control form-control-lg" >
                                </div>
                            </div>
                            <div class="col-md-6 mb-4">
                              <label for="jegyt" class="form-label">Jegy módosítás:</label>
                                <div class="form-outline form-control-lg">
                                  <select id="jegyt" name="jegyt" class="form-control form-control-lg"  >
                                    <?php 
                                    if ($adatok2['jegyt'] === "egyedi") {
                                        echo '<option id="jegyt" name="jegyt" value="egyedi" selected required>Egyedi</option>';
                                        echo '<option id="jegyt2" name="jegyt2" value="csoportos" required>Csoportos</option>';    
                                    }else if ($adatok2['jegyt'] === "csoportos") {
                                        echo '<option id="jegyt" name="jegyt" value="egyedi" required>Egyedi</option>';
                                        echo '<option id="jegyt2" name="jegyt2"  value="csoportos" selected required>Csoportos</option>';                                            
                                    }else
                                    {
                                        echo '<option id="" name="" value="" selected required></option>';
                                        echo '<option id="jegyt" name="jegyt" value="egyedi" required>Egyedi</option>';
                                        echo '<option id="jegyt2" name="jegyt2"  value="csoportos" required>Csoportos</option>';
                                    }
                                    ?>
                                    
                                  </select>
                                </div>
                            </div>
                        </div>    
                        <!--<button type="submit" class="btn btn-info btn-block mb-4" value="1" name="Vasarlas">Vásárlás</button>-->
                        <a href="index.php?menuItem=card&gender=<?php echo $adatok2['gender'];?>" class="btn btn-info btn-block mb-4">Vásárlás</a>
                        <button type="submit" class="btn btn-info btn-block mb-4" value="1" name="Adatmodositas">Módosítás</button>
                        <button type="submit" class="btn btn-info btn-block mb-4" value="1" name="Egyszarvu">Törlés</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-lg-6 mb-4 mb-lg-0">
          <img src="kepek/bank/mlsz-logo-kicsi.png" class="w-100 rounded-4 shadow-4" alt="kepek" />
        </div>
    </div>
</div>
</section>