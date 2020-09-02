<?php
    header('Content-Type: application/json');
    header('Acess-Control-Allow-Origin: *');

  include "config.php";
  
  $sql = "select * from user_registration";
  $result = mysqli_query($conn, $sql) or die('SQL Query Error');

  if(mysqli_num_rows($result) > 0){
      $output = mysqli_fetch_all($result,MYSQLI_ASSOC);
      echo json_encode($output);
  }
  else{
      echo json_encode(array('message' => 'No Reocrd Found.','status' => false));
  }
?>