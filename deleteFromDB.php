<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'configDB.php';
  $product = $_POST['product'];
  $quantity = $_POST['quantity'];

  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql_query = "DELETE FROM list WHERE product = '$product' AND quantity = '$quantity'";

  if(mysqli_query($conn, $sql_query)){
    echo "Insert data sucessfully!";
  } else{
    echo "Try again";
  }

  mysqli_close($conn);

}
 ?>
