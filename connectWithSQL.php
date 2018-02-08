<?php

$servername = "localhost";
$username = "root";
$password = ""; 
$dbname = "my_test_database";

// Create connection

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error() . "\n");
}



// sql zum Aktualisieren eines Datensatzes in der Tabelle Users

$sql = "UPDATE Users SET lastname='Johny' WHERE user_id=2";


if (mysqli_query($conn, $sql)) {
    echo "<h1>yeah, finished <h1>";
} else {
    echo "<h1>Record creation error for: </h1>" . 

          "<p>" . $sql . "</p>" . 

          mysqli_error($conn);

}

mysqli_close($conn);



?>