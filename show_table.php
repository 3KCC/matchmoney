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
  echo "You want to sell ".$row['amount']." ".$row['sell_CCY']." You want to receive ".$row['buy_CCY'].". The followings match your request:";
  echo "<br>"."<br>";
}

$query = "SELECT * FROM sample WHERE buy_CCY = '$buy_CCY' AND  sell_CCY = '$sell_CCY'";
$result = mysqli_query($conn, $query);

echo '<table width="50%", border="1px solid black", cellspacing = "2", cellpadding="2"><tr>';
  echo '<td width="15%">';
    echo '<font face = "Arial, Helvatica, sans-serif">User_ID</font>';
  echo '</td>';
  echo '<td>';
    echo '<font face = "Arial, Helvatica, sans-serif">Buy</font>';
  echo '</td>';
  echo '<td>';
    echo '<font face = "Arial, Helvatica, sans-serif">Sell</font>';
  echo '</td>';
  echo '<td width="25%">';
    echo '<font face = "Arial, Helvatica, sans-serif">Amount</font>';
  echo '</td>';
  echo '<td width="20%">';
    echo '<font face = "Arial, Helvatica, sans-serif">Action</font><br>';
  echo '</td>';
echo '</tr>';
  while($row = mysqli_fetch_array($result)) {
   echo '<tr><td>'.$row['customer_ID'].'</td><td>'.$row['buy_CCY'].'</td><td>'.$row['sell_CCY'].'</td><td>'.$row['amount'].'</td><td>Accept/Decline</td></tr>';
}

echo '</tr></table>';


?>