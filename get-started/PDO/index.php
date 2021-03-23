<?php
require 'mydatabase.php';

try {

    $pdo = new PDO( 'mysql:host = localhost; dbname=mohit', 'root', '' );

    $pdo->setAttribute( PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION );

    $sql = 'SELECT * FROM `user_registeration`';

    $res = $pdo->query( $sql );

    if ( $res->rowCount() > 0 ) {

        echo '<table>';
        echo ' <a href="/update.php>">update</a>';
        echo' <a href = "/delete.php">delete</a>';
        echo ' <a href = "/insert.php">insert</a>';
        echo '<tr>';

        echo '<th>ID</th>';

        echo '<th>Name</th>';

        echo '<th>Email</th>';

        echo '<th>Role</th>';

        echo '</tr>';

        while ( $row = $res->fetch() ) {

            echo '<tr>';

            echo '<td>'.$row['id'].'</td>';

            echo '<td>'.$row['Name'].'</td>';

            echo '<td>'.$row['email'].'</td>';

            echo '<td>'.$row['Role'].'</td>';

            echo '</tr>';

        }

        echo '</table>';
        unset( $res );

    } else {

        echo 'No matching records are found.';

    }

} catch ( PDOException $e ) {

    die( "ERROR: Could not able to execute $sql. "
    .$e->getMessage() );

}

unset( $pdo );

?>