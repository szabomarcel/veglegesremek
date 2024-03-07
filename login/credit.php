<?php
// Function to sanitize input data
function sanitizeInput($data) {
    global $mysqli;
    return $mysqli->real_escape_string($data);
}

// Process payment data
if(filter_input(INPUT_POST, "card", FILTER_VALIDATE_BOOL, FILTER_NULL_ON_FAILURE)){
    // Sanitize and validate input data
    $cardNumber = sanitizeInput($_POST["cardnumber"]);
    $name = sanitizeInput($_POST["cardname"]);
    $expirationDate = sanitizeInput($_POST["expirationdate"]);
    $CVV = sanitizeInput($_POST["CVV"]);

    // Insert data into the database
    $insertQuery = "INSERT INTO payment_data (`name`, card_number, expiration_date, CVV) VALUES ('$name', '$cardNumber', '$expirationDate', '$CVV')";

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
              <p class="card-text"><b>Hely: </b></p>
              <p class="card-text"><b>Ár: </b></p>
              <!--<p class="card-text"><b>Alapítva: </b></p>
              <p class="card-text"><b>Stadion: </b></p>
              <p class="card-text"><b>Vezetőedző: </b></p>-->
            <a href="kepek/csapatok/DVSC1.png" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="fa fa-zoom-in"></i></a>
          <a href="kepek/csapatok/DVSC1.png" title="More Details" class="details-link"><i class="fa fa-link fa-stack-1x fa-inverse"></i></a>
        </div>
      </div>
    </div>
    <div class="col-sm">
    <form class="credit-card">
      <div class="form-header">
        <h4 class="title">Credit card detail</h4>
      </div>
      <div class="form-body">
        <!-- Card Number -->
        <input type="text" class="card-number" placeholder="Card Number" id="cardnumber">
        
        <input type="text" class="card-name" placeholder="Card Name" id="cardname">
        
        <!-- Date Field -->
        <input type="text" class="card-date" placeholder="Card Date" id="expiration_date">        
    
        <!-- Card Verification Field -->
        <div class="card-verification">
          <div class="cvv-input">
            <input type="text" placeholder="CVV" id="CVV">
          </div>
          <div class="cvv-details">
            <p>3 or 4 digits usually found <br> on the signature strip</p>
          </div>
        </div>
    
        <!-- Buttons -->
        <button type="submit" class="proceed-btn" name="card">Proceed</a></button>
        <button type="submit" class="paypal-btn"><a href="#">Pay With</a></button>
        <button type="button" class="proceed-btn"><a href="index.php?menuItem=felhasznalo">Vissza</a></button>
      </div>
    </form>
    </div>
    <div class="col-sm"><br>
    <div class="portfolio-content h-100 lista">
        <img src="kepek/csapatok/DVSC1.png" class="img-fluid" alt="DVSC1">
          <div class="portfolio-info" id="csapat1">
            <h4><p class="card-text"><b></b></p></h4>
              <p class="card-text">Köszönjök a vásárlást, remélem hogy minket fog választani és jó lesz velünk az élet. <img src="kepek/navbar/smiling-face.png" height="20" width="20"></p>
            <a href="kepek/csapatok/DVSC1.png" title="Remodeling 1" data-gallery="portfolio-gallery-remodeling" class="glightbox preview-link"><i class="fa fa-zoom-in"></i></a>
          <a href="kepek/csapatok/DVSC1.png" title="More Details" class="details-link"><i class="fa fa-link fa-stack-1x fa-inverse"></i></a>
        </div>
      </div>
    </div>
  </div>
</div><br><br>