<?php
  include 'configDB.php';
  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//if everything is fine

//creating an array for storing the data
$products = array();

//this is our sql query
$sql = "SELECT product, quantity FROM list;";

//creating an statment with the query
$stmt = $conn->prepare($sql);

//executing that statment
$stmt->execute();

//binding results for that statment
$stmt->bind_result($product, $quantity);

//looping through all the records
while($stmt->fetch()){

 //pushing fetched data in an array
 $temp = [
 'product'=>$product,
 'quantity'=>$quantity
 ];

 //pushing the array inside the products array
 array_push($products, $temp);
}

//displaying the data in json format
echo json_encode($products);


  mysqli_close($conn);
 ?>
