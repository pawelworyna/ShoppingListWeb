<?php
  if($_SERVER['REQUEST_METHOD']=='POST'){
  include 'configDB.php';
  $nameUsr = $_POST['nameUsr'];
  $passwordUSr = $_POST['passwordUsr'];
  $emailUsr = $_POST['emailUsr'];

  $conn = new mysqli($dbhost, $dbuser, $dbpass, $db);

  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  $sql_query = "INSERT INTO users(name, password, email) VALUES ('$nameUsr','$passwordUSr','$emailUsr')";

  if(mysqli_query($conn, $sql_query)){
    echo "Create account successfully!";
  } else{
    echo "Try again";
  }

  mysqli_close($conn);

}
 ?>
