<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $database = "SneakerStore";

  $conn = new mysqli($servername, $username, $password, $database);

  if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error)
  }

  $name = $_POST[`name`];
  $phone = $_POST[`phone`];
  $address = $_POST[`address`];
  $card_number = $POST[`card_number`];
  $expirymonth = $_POST[`expiry_month`];
  $expiry_year = $_POST[`expiry_year`];
  $cvv = $_POST[`cvv`];

  // insert data into database
  $sql = "INSERT INTO payments (name, phone, address, card_number, expiry_month, expiry_year, cvv
   VALUES ('$name', '$phone', '$address', '$card_number', '$expiry_month', '$expiry_year', '$cvv')";

    if ($conn->query($sql) === TRUE) {

        echo "<script>alert('Checkout complete');</script>";

        echo "<script>window.setTimeout(function(){ window.location.href = 'index.html'; }, 1000);</script>";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
 