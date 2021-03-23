<?php
require 'mydatabase.php';
try {
    $conn = new PDO( "mysql:host=$servername;dbname=mohit", $username, $password );
    // set the PDO error mode to exception
    $conn->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    // sql to delete a record
    $sql = 'DELETE FROM `user_registeration` WHERE id=1';

    // use exec() because no results are returned
    $conn->exec( $sql );
    echo 'Record deleted successfully';
    header( 'Location:index.php' );
} catch( PDOException $e ) {
    echo $sql . '<br>' . $e->getMessage();
}

$conn = null;
?>