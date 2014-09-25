<?php
// Get data
$customer_ID = $_POST["customer_ID"];

// Database connection
$conn = mysqli_connect("localhost","minhtrang","ezfx0109","trangTest");
if(!$conn) {
die('Problem in database connection: ' . mysql_error());
}


// Data insertion into database
$query = "SELECT * FROM sample WHERE customer_ID = '$customer_ID' ";
$criteria = mysqli_query($conn, $query);


while($row = mysqli_fetch_array($criteria)) {
  $buy_CCY = $row['sell_CCY'] ;
  $sell_CCY = $row['buy_CCY'];
  echo "You want to sell ".$row['amount']." ".$row['sell_CCY']."<br>"."You want to receive ".$row['buy_CCY'].". The followings match your request:";
  echo "<br>"."<br>";
}

$query = "SELECT * FROM sample WHERE buy_CCY = '$buy_CCY' AND  sell_CCY = '$sell_CCY'";
$result = mysqli_query($conn, $query);

while($row = mysqli_fetch_array($result)) {
  echo $row['customer_ID']."<br>"."wants to sell ".$row['amount']." ".$row['sell_CCY'];
  echo "<br>"."wants to receive "." ".$row['buy_CCY'];
  echo "<br>"."<br>";
}

?>