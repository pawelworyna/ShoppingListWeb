<?php
  require "configDB.php";

  $checkNameUsr = $_POST['nameUsr'];
  $checkPswd = $_POST['passwordUsr'];

  $connection = new mysqli($dbhost, $dbuser, $dbpass, $db);

  $query = "SELECT * FROM users";

  $result = mysqli_query($connection, $query);

  $response = array();

    while($row = mysqli_fetch_assoc($result))
    {
        $user_id = $row['id'];
        $user_name = $row['name'];
        $user_password = $row['password'];
        if($user_name == $checkNameUsr &&  $user_password == $checkPswd){
          $response['status'] = 1;
          $response['usr_id'] = $user_id;
          break;
        }

        $response['status'] = 0;
        $response['usr_id'] = -1;

    }

    echo json_encode($response);


 ?>
