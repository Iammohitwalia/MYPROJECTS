<?php
    require_once 'bootstrap/app.php';
    // delete user
   /* $data = file_get_contents(file_user());
    $json_arr = json_decode($data, true);
    $new_filtered_array = array_filter($json_arr, function ($element) {
        return $element['id'] != $_GET['id'];
    });
    // print_r($new_filtered_array);
    $array_encode = json_encode($new_filtered_array, JSON_PRETTY_PRINT);
    file_put_contents(file_user(), $array_encode);
     
    //  delete profile
    $data = file_get_contents(file_profile());
    $json_arr = json_decode($data, true);
    $new_filtered_array = array_filter($json_arr, function ($element) {
        return $element['id'] != $_GET['id'];
    });
    // print_r($new_filtered_array);
    $array_encode = json_encode($new_filtered_array, JSON_PRETTY_PRINT);
    file_put_contents(file_profile(), $array_encode);*/
   
    require_once 'connection.php';
    session_start();
    $id = $_GET['id'];
    //    $data = "SELECT role from `users` where id='$id'";
    // // echo "record delete successfull";	 
    //  $result = $conn->prepare($data);
    //  $$result->execute();;
    //  if ($result['role'] == "admin") {
    //     echo "Sorry you can't delete admin";
    //   }else{
    try {
       $select = "SELECT Role from `users` where id='$id'";
       $result = $conn->prepare($select);
       $result->execute();
       $row = $result->fetch(PDO::FETCH_ASSOC);
        if($row['Role']== $_SESSION['userRole'] AND $_SESSION['id']!=$_GET['id']){
       echo "<b>Admin can't delete Admin profile</b>";
   }else{
          $sql = "DELETE users,userprofile FROM users INNER JOIN userprofile ON userprofile.user_id = users.id WHERE users.id = $id;";
          $conn->exec($sql);
          echo "record delete successfull";
       }
    } catch (PDOException $e) {
       echo "The recoed are not deleted";
    }

header("location:users/index.php");

 ?>
    
   
