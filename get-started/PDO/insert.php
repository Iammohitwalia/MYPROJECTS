<?php
require 'mydatabase.php';
try {
    $conn = new PDO( "mysql:host=$servername;dbname=mohit", $username, $password );
    // set the PDO error mode to exception
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );
    $sql = "INSERT INTO `user_registeration` (Name, email ,Role)
    VALUES ('Sumit', 'Sumit@gmail.com', 'user')";
    // use exec() because no results are returned
    $conn->exec( $sql );
    echo 'New record created successfully';
    header( 'Location:index.php' );

} catch( PDOException $e ) {
    echo $sql . '<br>' . $e->getMessage();
}

$conn = null;
?>