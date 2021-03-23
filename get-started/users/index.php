<?php
require_once '../connection.php';
require_once '../bootstrap/app.php';
require_once file_header();
session_start();
if ( !isset( $_SESSION['email'] ) ) {
    header( 'Location:../alert.php' );
    die;
}

if ( $_SESSION['userRole'] == 'admin' ) {
    //   echo $_SESSION['role'];
    echo $_SESSION['username'];
    echo '<br>';
    echo $_SESSION['email'];

    ?>
    <div class = 'container'>
    <a class = 'btn btn-primary' href = ' create.php ' role = 'button'>
    <h5>CREATE USER</h5>
    </a>

    </div>
    <div class = 'container'>
    <table class = 'table table-striped'>
    <thead class = 'table-dark'>
    <tr>
    <!-- Set the table headings -->

    <th scope = 'col'>name</th>
    <th scope = 'col'>email</th>
    <th scope = 'col'>role</th>
    <th scope = 'col'>action</th>
    </tr>
    </thead>
    <!-- get the user data and decode it -->
    <?php
    $sql = 'SELECT * FROM users';
    // print_r( $sql );
    $query = $conn->prepare( $sql );
    // print_r( $query );
    // $query-> bindParam( ':email', $email, PDO::PARAM_STR );
    // $query-> bindParam( ':password', $password, PDO::PARAM_STR );
    $query->execute();
    $results = $query->fetchAll( PDO::FETCH_ASSOC );

    //
    ?>
    <?php
    //    $get_user = file_get_contents( file_user() );
    //     $results = json_decode( $get_user, true );
    // Start the loop for all users

    foreach ( $results as $result ) {
        ?>

        <tbody>
        <tr>
        <!-- Set the table data -->

        <td><?php echo $result['name'] ?></td>
        <td><?php echo $result['email'] ?></td>
        <td><?php echo $result['Role'] ?></td>
        <td>

        <a class = 'btn btn-primary' href = "edit.php?id=<?php echo $result['id'] ?>" role = 'button'>edit</a>
        <a class = 'btn btn-danger' href = "destroy.php?id=<?php echo $result['id'] ?>" role = 'button'>delete</a>
        <a class = 'btn btn-info' href = "view.php?id=<?php echo $result['id'] ?>" role = 'button'>view</a>

        </td>
        </tr>

        </div>
        <?php
    }
} else {

    echo $_SESSION['username'];
    // echo $_SESSION['role'] ;

    echo '<br>';
    echo $_SESSION['email'];
}

?>
