<?php
require_once __DIR__ .'../../connection.php';
session_start();
require_once __DIR__ . '/../bootstrap/app.php';
require_once file_header();

// $profile = file_get_contents( file_profile() );
// $users = json_decode( $profile, true );
$id = $_GET['id'];
$sql = "SELECT * FROM userprofile WHERE user_id = '$id'";
// print_r( $sql );
$query = $conn->prepare( $sql );
// print_r( $query );
// $query-> bindParam( ':email', $email, PDO::PARAM_STR );
// $query-> bindParam( ':password', $password, PDO::PARAM_STR );
$query->execute();
$results = $query->fetchAll( PDO::FETCH_ASSOC )
?>

<table class = 'table'>
<thead>
<tr>
<!-- Set the table headings  -->

<th scope = 'col'>name</th>
<th scope = 'col'>address</th>
<th scope = 'col'>pin-code</th>
<th scope = 'col'>contury</th>
<th scope = 'col'>state</th>
<th scope = 'col'>age</th>
<th scope = 'col'>DOB</th>
<th scope = 'col'>Height</th>
<th scope = 'col'>Weight</th>
<th scope = 'col'>Gender</th>
<th scope = 'col'>skin</th>
<th scope = 'col'>hair</th>
</tr>
</thead>

<tbody>
<tr>
<?php
// $filter = array_filter( $users, function ( $user ) {
//     if ( $user['id'] == $_GET['id'] ) {
foreach ( $results as $user ) {
    ?>

    <td><?php echo $user['name'] ?></td>
    <td><?php echo $user['address'] ?></td>
    <td><?php echo $user['Pincode'] ?></td>
    <td><?php echo $user['Country'] ?></td>
    <td><?php echo $user['state'] ?></td>
    <td><?php echo $user['age'] ?></td>
    <td><?php echo $user['DOB'] ?></td>
    <td><?php echo $user['height'] ?></td>
    <td><?php echo $user['weight'] ?></td>
    <td><?php echo $user['gender'] ?></td>
    <td><?php echo $user['skin'] ?></td>
    <td><?php echo $user['hair'] ?></td>

    <?php
}
?>
</tr>
</tbody>
</table>