<?php
include('dbConnection.php');

// retrieve student data
$sql = "SELECT * FROM student";
$result = $conn->query($sql);
if($result->num_rows > 0) {
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
}

echo json_encode($data); // returning JSON format data as response to ajax call
?>