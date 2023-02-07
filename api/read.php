<?php
include "Database.php";
include "DB_Config.php";

new Database(HOST, USERNAME, PASSWORD, DATABASE_NAME);
// $connection = $db->connection;
$usersRef = $db->collection('roles');
$result = $usersRef->documents();
// foreach ($snapshot as $user) {
//     printf('User: %s' . PHP_EOL, $user->id());
//     printf('First: %s' . PHP_EOL, $user['first']);
//     if (!empty($user['middle'])) {
//         printf('Middle: %s' . PHP_EOL, $user['middle']);
//     }
//     printf('Last: %s' . PHP_EOL, $user['last']);
//     printf('Born: %d' . PHP_EOL, $user['born']);
//     printf(PHP_EOL);
// }
// printf('Retrieved and printed out all documents from the users collection.' . PHP_EOL);



// if(!$connection){
//     echo json_encode(array("message" => "connection error!"));
// }


// $query = "SELECT * FROM roles";
    

// $result = mysqli_query($connection, $query); 

// if(!$result){
//     die('Query failed!' . mysqli_error($connection));
// }


$arr = array();
while($row = mysqli_fetch_object($result)){
    array_push($arr, $row);
}

echo json_encode($arr);




?>

