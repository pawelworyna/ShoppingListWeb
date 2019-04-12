<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'configDB.php';
  $product_name = $_POST['productName'];
  $product_ID = $_POST['productID'];
  $user_id = $_POST['nameUsr'];


  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql_query = "UPDATE products VALUES ('$nameUsr','$passwordUSr','$emailUsr')";

  if(mysqli_query($conn, $sql_query)){
    echo "Create account successfully!";
  } else{
    echo "Try again";
  }

  mysqli_close($conn);

}
 ?>
