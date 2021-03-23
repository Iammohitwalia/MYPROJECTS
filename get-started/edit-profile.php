<?php
require_once __DIR__ . '/connection.php';
session_start();
require_once __DIR__ . '/bootstrap/app.php';
require_once file_header();
/**
* get the profile data and decode it

*/
//     $profile_get = file_get_contents( file_profile() );
//     $profile_data = json_decode( $profile_get, true );
//     $profile = $_SESSION['id'];
//    --$profile;
//     $row = $profile_data[$profile];
$id = $_SESSION['id'];
try {

    $sql = "SELECT * FROM `userprofile` WHERE user_id ='$id'";
    $query = $conn->prepare( $sql );
    $query->execute();
    $res = $query->fetchAll( PDO::FETCH_ASSOC );
    //print_r( $res );
    foreach ( $res as $row ) {
        ?>

        <div class = 'container'>
        <!-- creat edit_profile form  -->
        <div class = 'row'>

        <div class = 'col-lg-6'>
        <form method = 'post'>
        <div class = 'form-group'>
        <label> address</label>
        <input type = 'text' name = 'address' class = 'form-control' value = "<?php echo $row['address']; ?>">
        </div>
        <div class = 'form-group'>
        <label> state</label>
        <input type = 'text' name = 'state' class = 'form-control' value = "<?php echo $row['state'];?>">
        </div>
        <div class = 'form-group'>
        <label> distt</label>
        <input type = 'text' name = 'distt' class = 'form-control' value = "<?php echo $row['distt']; ?>">
        </div>
        <div class = 'form-group'>
        <label> country</label>
        <input type = 'text' name = 'Country' class = 'form-control' value = "<?php echo $row['Country'];?>">
        </div>
        <div class = 'form-group'>
        <label> pin</label>
        <input type = 'number' name = 'Pincode' class = 'form-control' value = "<?php echo $row['Pincode']; ?>">
        </div>
        <div class = 'form-group'>
        <label> age</label>
        <input type = 'number' name = 'age' class = 'form-control' value = "<?php echo $row['age']; ?>">
        </div>
        <label>DOB</label>
        <select name = 'DOB'>
        <?php
        /**
        * loop for date
        * the initeial value is one
        * and loop iterate up to 31
        */
        for ( $i = 1; $i <= 31; $i++ ) {
            ?>
            <option value = "<?php echo $i; ?>"> <?php echo $i;
            ?></option>
            <?php
        }
        ?>

        </select>
        <select name = 'DOB'>
        <?php
        // loop for month
        for ( $i = 1; $i <= 12; $i++ ) {

            ?>
            <option value = "<?php echo $i; ?>"> <?php echo $i;
            ?></option>
            <?php

        }

        ?>

        </select>
        <select name = 'DOB'>

        <?php
        // loop for geting year
        for ( $i = 1980; $i <= date( 'Y' );
        $i++ ) {
            ?>
            <option value = "<?php echo $i; ?>"> <?php echo $i;
            ?></option>
            <?php

        }

        ?>

        </select>
        <div class = 'form-group'>
        <label> height</label>
        <input type = 'number' name = 'height' class = 'form-control' value = "<?php echo $row['height'] ?>">
        </div>

        </div>

        <div class = 'col-lg-6'>

        <div class = 'form-group'>
        <label> weight</label>
        <input type = 'number' name = 'weight' class = 'form-control' value = "<?php echo $row['weight'] ?>">
        </div>

        <div class = 'form-group'>

        <label>Skin color</label>
        <input type = 'text' name = 'skin' class = 'form-control' value = "<?php echo $row['skin']; ?>">
        </div>
        <div class = 'form-group'>
        <label> hair color</label>
        <input type = 'text' name = 'hair' class = 'form-control' value = "<?php echo $row['hair'] ?>">
        </div>

        <div class = 'form-group'>
        <label class = 'control-label col-sm-3'>Gender</label>
        <div class = 'col-sm-6'>
        <div class = 'row'>
        <div class = 'col-sm-4'>
        <label class = 'radio-inline'>
        <input type = 'radio' name = 'gender' value = 'female'>Female
        </label>
        </div>
        <div class = 'col-sm-4'>
        <label class = 'radio-inline'>
        <input type = 'radio' name = 'gender' value = 'male' checked>Male

        </label>
        </div>
        </div>
        </div>
        </div>
        <input type = 'hidden' name = 'action' value = 'edit_profile'>
        <input type = 'submit' class = 'btn btn-danger' name = 'submit'>
        </form>
        </div>

        </div>

        </div>
        <?php

    }
} catch ( PDOException $e ) {

    die( "ERROR: Could not able to execute $sql. ".$e->getMessage() );

}

unset( $pdo );
?>