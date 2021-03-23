<?php
require_once __DIR__ .'/../../../connection.php';

/**
* first we get profile data
* and decode it
* store the session['id] in a variable
     * and decrement the id because the index of array start with 0
     * and we have id start with one
     */
//     $get_profile = file_get_contents(file_profile());
//     $data_profile = json_decode($get_profile, true);
//     $id = $_SESSION['id'];
//    --$id;
//     $row = $data_profile[$id];
    
        if ($_POST['submit']) {


            $name=$_POST['name'];
            $email=$_POST['email'];
            $address=$_POST['address'];
            $state=$_POST['state'];
            $distt=$_POST['distt'];
            $country=$_POST['Country'];
            $pincode=$_POST['Pincode'];
            $age=$_POST['age'];
            $dob=$_POST['DOB'];
            $height=$_POST['height'];
            $weight=$_POST['weight'];
            $gender=$_POST['gender'];
            
            $hair=$_POST['skin'];
            $skin=$_POST['hair'];

            $id=$_GET['id'];
            
            $sql="UPDATE users JOIN userprofile ON users.id = userprofile.user_id
            SET users.name = '$name', users.email='$email', userprofile.name='$name', userprofile.address='$address',userprofile.state='$state',userprofile.distt='$distt', userprofile.Country='$country',
            userprofile.Pincode='$pincode',userprofile.age='$age', userprofile.DOB='$dob',userprofile.height='$height',
            userprofile.weight='$weight',userprofile.gender='$gender',userprofile.skin='$skin',userprofile.hair='$hair' WHERE users.id = $id";
            $query = $conn->prepare($sql);
            // Query Execution
            $query->execute();
            header('location:index.php');
        }
                
            
                ?>