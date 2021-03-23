<?php
require_once __DIR__ . '/../../../connection.php';
session_start();

if ( $_POST['submit'] ) {
    /**
    * strtotime
    * @return Returns a timestamp on success. FALSE on failure
    */
    $t = time();
    $time = strtotime( date( 'y-m-d h:1:5' ) );
    $t.$time;
    $file = new SplFileInfo( $_FILES['avtar']['name'] );
    $ext = $file->getExtension();
    $filename = $t.'.'.$ext;
    $uploadfile = storage_path() . $filename;
    $response = move_uploaded_file( $_FILES['avtar']['tmp_name'], $uploadfile );
    //    get the filed of form
    $userid = $_SESSION['id'];
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
    // insert query to insert the data into the table
    try {
        $sql = "INSERT INTO `contacts`(user_id,name,AlternativeNumber,mobile,birthday,email,nickname,company,jobtitle,homeemail,website,location,notes,img) VALUES('$userid','$name','$AlternativeNumber','$mobile','$birthday',
       '$email','$nickname','$company','$jobtitle','$homeemail','$website','$location','$notes','$img')";
        $conn->exec( $sql );
    } catch ( PDOException $e ) {
        echo 'failed: ' . $e->getMessage();
    }
    // set the header location
    header( 'Location:index.php' );
}

?>