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
$sql = "SELECT products.product, products.quantity, products.status, users.name FROM  products LEFT OUTER JOIN users ON products.user_id = users.id;";

//creating an statment with the query
$stmt = $conn->prepare($sql);

//executing that statment
$stmt->execute();

//binding results for that statment
$stmt->bind_result($product, $quantity, $status, $userName);

//looping through all the records
while($stmt->fetch()){

 //pushing fetched data in an array
 $temp = [
 'product'=>$product,
 'quantity'=>$quantity,
 'status' => $status,
 'userName' => $userName

 ];

 //pushing the array inside the products array
 array_push($products, $temp);
}

//displaying the data in json format
echo json_encode($products);


  mysqli_close($conn);
 ?>
