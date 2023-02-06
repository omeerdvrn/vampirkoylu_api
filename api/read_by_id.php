<?php

include "Database.php";
include "DB_Config.php";

$db = new Database(HOST, USERNAME, PASSWORD, DATABASE_NAME);
$connection = $db->connection;

if(!$connection){
    echo json_encode(array("message" => "connection error!"));
}


$id = $_GET["id"];

$query = "SELECT * FROM roles ";
$query .= "WHERE id = $id ";


$result = mysqli_query($connection, $query); 

if(!$result){
    die('Query failed!' . mysqli_error($connection));
}


$arr = array();
while($row = mysqli_fetch_object($result)){
    array_push($arr, $row);
}
echo json_encode($arr);
    


?>