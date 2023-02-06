<?php

include "Database.php";
include "DB_Config.php";

$db = new Database(HOST, USERNAME, PASSWORD, DATABASE_NAME);
$connection = $db->connection;

if(!$connection){
    echo json_encode(array("message" => "connection error!"));
}
    
$data = json_decode(file_get_contents("php://input"));

if($data === null){
    echo json_encode(array("message" => "null!"));
    return;
}

$name = $data->name;
$description = $data->description;
$class = $data->class;


$query = "INSERT INTO roles(name, description, class)";
$query .= "VALUES ('$name', '$description', '$class')";

$result = mysqli_query($connection, $query); 

if(!$result){
    die('Query failed!' . mysqli_error($connection));
}
else {

    echo json_encode(array("message" => "Created!"));

}
?>



