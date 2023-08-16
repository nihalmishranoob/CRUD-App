<?php
  include('dbConnection.php');
  $data = stripcslashes(file_get_contents("php://input"));
  $mydata = json_decode($data, true);
  $id = $mydata['sid'];

  // retrieve specific student data
  $sql = "SELECT * FROM student WHERE id={$id}";
  $result = $conn->query($sql);
  $row = $result->fetch_assoc();
  
  // returning JSON data as response to ajax call
  echo json_encode($row);
?>