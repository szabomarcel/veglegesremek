<?php
// Function to sanitize input data
/*function sanitizeInput($data) {
    global $mysqli;
    return $mysqli->real_escape_string($data);
}

// Process payment data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate input data
    $name = sanitizeInput($_POST["name"]);
    $cardNumber = sanitizeInput($_POST["cardnumber"]);
    $expirationDate = sanitizeInput($_POST["expirationdate"]);
    $securityCode = sanitizeInput($_POST["securitycode"]);

    // Insert data into the database
    $insertQuery = "INSERT INTO payment_data (name, card_number, expiration_date, security_code)
                    VALUES ('$name', '$cardNumber', '$expirationDate', '$securityCode')";

    if ($mysqli->query($insertQuery) === TRUE) {
        echo "Payment information stored successfully.";
    } else {
        echo "Error: " . $insertQuery . "<br>" . $mysqli->error;
    }

    // Close database connection
    $mysqli->close();
}*/
?>
<div class="container">
  <h2>Credit Card Information</h2>
  <form action="#" method="post">
    <label for="card-number">Card Number:</label>
    <input type="text" id="card-number" name="card-number" placeholder="1234 5678 9012 3456" required maxlength="19">
    <label for="card-holder">Card Holder:</label>
    <input type="text" id="card-holder" name="card-holder" placeholder="John Doe" required>
    <div style="display: flex; justify-content: space-between;">
      <div style="flex: 1; margin-right: 10px;">
        <label for="expiration-date">Expiration Date:</label>
        <input type="text" id="expiration-date" name="expiration-date" placeholder="MM/YY" required maxlength="5">
      </div>
      <div style="flex: 1; margin-left: 10px;">
        <label for="cvv">CVV:</label>
        <input type="password" id="cvv" name="cvv" placeholder="123" required maxlength="3">
      </div>
    </div>
    <div class="row">
        <div class="col-6">
            <input type="submit" value="Megvásárlom">
        </div>
        <div class="col-6">
            <a href="index.php?menuItem=felhasznalo" class="btn btn-info btn-block mb-4">Vissza</a> 
        </div>
    </div>
  </form>
</div>
