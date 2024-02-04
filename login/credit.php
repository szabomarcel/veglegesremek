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

<form action="process_payment.php" method="post">
    <!-- Your existing form fields go here -->

    <div class="field-container">
        <label for="name">Name</label>
        <input id="name" name="name" maxlength="20" type="text">
    </div>
    <div class="field-container">
        <label for="cardnumber">Card Number</label><span id="generatecard">generate random</span>
        <input id="cardnumber" name="cardnumber" type="text" pattern="[0-9]*" inputmode="numeric">
    </div>
    <div class="field-container">
        <label for="expirationdate">Expiration (mm/yy)</label>
        <input id="expirationdate" name="expirationdate" type="text" pattern="[0-9]*" inputmode="numeric">
    </div>
    <div class="field-container">
        <label for="securitycode">Security Code</label>
        <input id="securitycode" name="securitycode" type="text" pattern="[0-9]*" inputmode="numeric">
    </div>

    <button type="submit">Submit Payment</button>
</form>
