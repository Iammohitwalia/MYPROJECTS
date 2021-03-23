<?php
require 'mydatabase.php';

try {
    $pdo = new PDO( 'mysql:host=localhost; dbname=mohit', 'root', '' );

    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $sql = "UPDATE `user_registeration` SET Name='mohit', email='mohitw420@gmail.com' WHERE id=8";

    $pdo->exec( $sql );

    echo 'Records was updated successfully.';
    header( 'Location:index.php' );

} catch( PDOException $e ) {

    die( "ERROR: Could not able to execute $sql. "
    . $e->getMessage() );

}

unset( $pdo );

?>