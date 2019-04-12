<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'configDB.php';
  $product = $_POST['product'];
  $quantity = $_POST['quantity'];
  $price = $_POST['price'];

  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql_query = "INSERT INTO products(product, quantity, price) VALUES ('$product','$quantity','$price')";

  if(mysqli_query($conn, $sql_query)){
    echo "Insert data sucessfully!";
  } else{
    echo "Try again";
  }

  mysqli_close($conn);

}
 ?>
