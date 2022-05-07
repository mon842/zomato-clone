<?php
$server = "localhost";
$username = "root";
$password = "";
$database = "skillvertex";

$conn = mysqli_connect($server, $username, $password, $database); // mysqli_connect() will connect the code with the database wising these parameters
if (!$conn){
//     echo "success";
// }
// else{
    die("Error". mysqli_connect_error()); // mysqli_connect_error() will show error if there is an error in code
}

?>
