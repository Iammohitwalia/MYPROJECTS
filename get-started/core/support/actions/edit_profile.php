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
            $skin=$_POST['skin'];
            $hair=$_POST['hair'];
           

            $id=$_SESSION['id'];

            try {
                $sql = "UPDATE `userprofile` SET  `address`='$address',
                `state`='$state', `distt`='$distt', `Country`='$country', `Pincode`='$pincode', `age`='$age', `DOB`='$dob',
                `height`='$height', `weight`='$weight', `gender`='$gender', `skin`='$skin', `hair`='$hair' WHERE user_id='$id'";
                $query = $conn->prepare($sql);
                // Query Execution
                $query->execute(array($address,$state,$distt,$country,$pincode,$age,$dob,$height,$weight,$gender,$skin,$hair));
                echo ' record updated successfully';
                }
                
                catch (PDOException $e) {
                echo $sql . '<br>' . $e->getMessage();
                }
        return header('Location:users/profile.php');
    }
 