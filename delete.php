<?php 
  include('dbConnection.php');
  $data = stripcslashes(file_get_contents("php://input"));
  $mydata = json_decode($data, true);
  $id = $mydata['sid'];

  // deleting student
  if(!empty($id)) {
    $sql = "DELETE FROM student WHERE id = {$id}";
    if($conn->query($sql) == TRUE) {
        echo "Student deleted successfully";
    } else {
        echo "Unable to delete student";
    }
  } else {
    echo "Fill all fields";
  }
?>