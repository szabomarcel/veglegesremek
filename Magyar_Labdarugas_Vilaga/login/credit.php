<?php
// Process payment data
if(filter_input(INPUT_POST, "card", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)){
    //Sanitize and validate input data
    //$gender = filter_input(INPUT_POST, "gender");
    $cardname = filter_input(INPUT_POST, "cardname");
    $cardnumber = filter_input(INPUT_POST, "cardnumber");
    $expiration_date = filter_input(INPUT_POST, "expiration_date");
    $CVV = filter_input(INPUT_POST, "CVV");

    // Insert data into the database
    if ($mysqli->query($insertQuery) === TRUE) {
      echo "Payment information stored successfully.";
    } else {
      echo "Error: " . $insertQuery . "<br>" . $mysqli->error;
    }

    // Close database connection
    $mysqli->close();
}
?>
<div class="container">
  <div class="row">
    <div class="col-sm"><br>
      <div class="portfolio-content h-100 lista">
        <img src="kepek/csapatok/DVSC1.png" class="img-fluid" alt="DVSC1">
          <div class="portfolio-info" id="csapat1">
            <h4><p class="card-text"><b>Mérközés: </b></p></h4>
              <p class="card-text"><b>Ár: </b></i></p>
              <!--<p class="card-text"><b>Alapítva: </b></p>
              <p class="card-text"><b>Stadion: </b></p>
              <p class="card-text"><b>Vezetőedző: </b></p>-->
            <a href="kepek/csapatok/DVSC1.png" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="fa fa-zoom-in"></i></a>
          <a href="kepek/csapatok/DVSC1.png" title="More Details" class="details-link"><i class="fa fa-link fa-stack-1x fa-inverse"></i></a>
        </div>
      </div>
    </div>
    <div class="col-sm">
    <form class="credit-card" action="#" method="post">
      <div class="form-header">
        <h4 class="title">Hitelkártya adatok</h4>
      </div>
      <div class="form-body">
        <!-- Card Number -->
        <input type="text" class="card-number" placeholder="Kártya szám:" id="cardnumber" required>
        
        <input type="text" class="card-name" placeholder="Kártya név:" id="cardname" required>
        
        <!-- Date Field -->
        <input type="text" class="card-date" placeholder="Dátum:" id="expiration_date" required>        
    
        <!-- Card Verification Field -->
        <div class="card-verification">
          <div class="cvv-input">
            <input type="text" placeholder="CVV" id="CVV">
          </div>
          <div class="cvv-details">
            <p>3 vagy 4 számhegy általában<br> az aláírási sávon található.</p>
          </div>
        </div>
        <!-- Buttons -->
        <button type="submit" class="proceed-btn" name="card">Folytassa</a></button>
        <button type="button" class="proceed-btn"><a href="#">Fizessen Pay-jel</a></button>
        <button type="button" class="proceed-btn"><a href="index.php?menuItem=felhasznalo">Vissza</a></button>
      </div>
    </form>
    </div>
    <div class="col-sm"><br>
    <div class="portfolio-content h-100 lista">
        <img src="kepek/csapatok/DVSC1.png" class="img-fluid" alt="DVSC1">
          <div class="portfolio-info" id="csapat1">
            <h4><p class="card-text"><b></b></p></h4>
              <p class="card-text">Köszönjök a vásárlást, reméljük hogy minket fognak választani a jövőben, és jó lesz velünk együtt működni.<img src="kepek/navbar/smiling-face.png" height="20" width="20"></p>
            <a href="kepek/csapatok/DVSC1.png" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="fa fa-zoom-in"></i></a>
          <a href="kepek/csapatok/DVSC1.png" title="More Details" class="details-link"><i class="fa fa-link fa-stack-1x fa-inverse"></i></a>
        </div>
      </div>
    </div>
  </div>
</div><br><br>