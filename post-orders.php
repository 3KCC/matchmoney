<?php
// Get data
$customer_ID = $_POST["customer_ID"];
$buy_CCY = $_POST["buy_CCY"];
$sell_CCY = $_POST["sell_CCY"];
$amount = $_POST["amount"];

// Database connection
$conn = mysqli_connect("localhost","minhtrang","ezfx0109","trangTest");
if(!$conn) {
die('Problem in database connection: ' . mysql_error());
}

// Data insertion into database
$query = "INSERT INTO sample ( customer_ID, buy_CCY, sell_CCY, amount ) VALUES ( '$customer_ID', '$buy_CCY', '$sell_CCY', '$amount' )";
mysqli_query($conn, $query);

// Redirection to the success page
header("Location: http://localhost/test/success-page");
?>