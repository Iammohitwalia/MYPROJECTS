<?php
require_once'../connection.php';
session_start();
require_once __DIR__ . '/../bootstrap/app.php';
require_once file_header();

if ( $_SESSION['username'] ) {

    try {
        $sql = 'SELECT * FROM contacts';
        // print_r( $sql );
        $query = $conn->prepare( $sql );
        // print_r( $query );

        $query->execute();
        $results = $query->fetchAll( PDO::FETCH_ASSOC );

        ?>
        <div class = 'container'>
        <table class = 'table'>
        <thead>
        <tr>
        <th scope = 'col'>name</th>
        <th scope = 'col'>mobile</th>
        <th scope = 'col'>birthday</th>
        <th scope = 'col'>email</th>
        <th scope = 'col'>nickname</th>
        <th scope = 'col'>company</th>
        <th scope = 'col'>job_title</th>
        <th scope = 'col'>home_email</th>
        <th scope = 'col'>website</th>
        <th scope = 'col'>location</th>
        <th scope = 'col'>notes</th>

        </tr>
        </thead>
        <tbody>
        <tr>
        <?php
        foreach ( $results as $data ) {
            if ( $data['id'] == $_GET['id'] ) {
                //are the contact id and get id
                ?>

                <td><?php echo $data['name'];
                ?></td>
                <td><?php echo $data['mobile'];
                ?></td>
                <td><?php echo $data['birthday'];
                ?></td>
                <td><?php echo $data['email'];
                ?></td>
                <td><?php echo $data['nickname'];
                ?></td>
                <td><?php echo $data['company'];
                ?></td>
                <td><?php echo $data['jobtitle'];
                ?></td>
                <td><?php echo $data['homeemail'];
                ?></td>
                <td><?php echo $data['website'];
                ?></td>
                <td><?php echo $data['location'];
                ?></td>
                <td><?php echo $data['notes'];
                ?></td>

                <?php
            }
        }
    } catch( PDOException $e ) {
        echo $e->getMessage();
    }

    ?>
    </tr>
    <tr>
    </tr>
    </tbody>

    </table>
    </div>
    <?php
}
require_once file_footer();
?>