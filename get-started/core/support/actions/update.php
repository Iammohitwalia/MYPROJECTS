<?php
include_once __DIR__ . '../../../connection.php';
session_start();
if ( $_POST['submit'] ) {

    $time = strtotime( date( 'y-m-d h:1:5' ) );
    $file = new SplFileInfo( $_FILES['avtar']['name'] );
    $ext = $file->getExtension();
    $filename = $time.'.'.$ext;
    $uploadfile = storage_path(). $filename;
    $response = move_uploaded_file( $_FILES['avtar']['tmp_name'], $uploadfile );

    $id = $_GET['id'] ;
    $user_id = $_SESSION['id'];
    $name = $_POST['name'];
    $AlternativeNumber = $_POST['AlternativeNumber'];
    $mobile = $_POST['mobile'];
    $birthday = $_POST['birthday'];
    $email = $_POST['email'];
    $nickname = $_POST['nickname'];
    $company = $_POST['company'];
    $jobtitle = $_POST['jobtitle'];
    $homeemail = $_POST['homeemail'];
    $website = $_POST['website'];
    $location = $_POST['location'];
    $notes = $_POST['notes'];
    $img = $filename;

    try {
        $sql = "UPDATE `contacts` SET name='$name',AlternativeNumber='$AlternativeNumber',mobile='$mobile',birthday='$birthday',email='$email',nickname='$nickname',company='$company',jobtitle='$jobtitle',homeemail='$homeemail',website='$website',location='$location',notes='$notes',img='$img' WHERE id='$id'";
        $query = $conn->prepare( $sql );
        // Query Execution
        $query->execute();
        header( 'Location:index.php' );
    } catch( PDOException $e ) {
        echo  $e->getMessage();

    }

}
?>