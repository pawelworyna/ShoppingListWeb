<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'configDB.php';
  $product_name = $_POST['productName'];
  $product_quantity = $_POST['productQuantity'];
  $user_id = $_POST['userId'];


  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql_query = "UPDATE products SET user_id = '$user_id', status = 2 WHERE product = '$product_name' AND quantity = '$product_quantity';";

  if(mysqli_query($conn, $sql_query)){
    echo "Update list successfully!";
  } else{
    echo "Try again". $conn->connect_error;
  }

  mysqli_close($conn);

}
 ?>
