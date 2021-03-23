<?php
// include 'mydatabase.php';
include 'user.php';
$select = 'SELECT * FROM `user_registeration`';
$statement = $conn->query( $select );
$result = $statement->fetchAll( PDO::FETCH_CLASS, 'user' );
echo '<pre>';
print_r( $result );

?>