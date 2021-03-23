<?php

require_once __DIR__ . '../../connection.php';
session_start();
require_once __DIR__ . '/../bootstrap/app.php';
require_once file_header();
/**
* get the profile data and decode it
* store the $_GET['id] in a variable
     * decrement the id beacuse the array index start with 0 
  */
    // $profile_get = file_get_contents(file_profile());
    // $profile_data = json_decode($profile_get, true);
    // $profile = $_GET['id'];
    // --$profile;
    // // get the user data 
    // $row = $profile_data[$profile];
    // $user_get = file_get_contents(file_user());
    // $user_data = json_decode($user_get, true);
    // $user = $_GET['id'];
    // --$user;
    // $col = $user_data[$user];
    $id=$_GET['id'];
error_reporting(0);
    try{
    
    $sql ="SELECT a.id,a.name,a.address,a.state,a.distt,a.Country,a.Pincode,a.age,a.DOB,a.height,a.weight,a.gender,a.skin,a.hair ,users.name,users.email,users.Role FROM userprofile as a INNER JOIN users ON a.user_id=users.id WHERE a.user_id =$id";
    $data = $conn->prepare($sql);
    $data->execute();
    $results = $data->fetchAll(PDO::FETCH_ASSOC);
    foreach ($results as $row) {
        if($row['Role']== $_SESSION['userRole'] AND $_SESSION['id']!=$_GET['id']){
            echo "<b>admin can't edit admin profile</b>";
        }else{
    ?>
 

    <div class='container'>
        <!-- creat edit_profile form  -->
        <div class='row'>

            <div class='col-lg-6'>
                <form method='post'>
                    <div class='form-group'>
                        <label> Name</label>
                        <input type='text' name='name' class='form-control' value="<?php echo $row['name']; ?>">
                    </div>
                    <div class='form-group'>
                        <label> email</label>
                        <input type='email' name='email' class='form-control' value="<?php echo $row['email']; ?>">
                    </div>
                    <div class='form-group'>
                        <label> address</label>
                        <input type='text' name='address' class='form-control' value="<?php echo $row['address']; ?>">
                    </div>
                    <div class='form-group'>
                        <label> state</label>
                        <input type='text' name='state' class='form-control' value="<?php echo $row['state']; ?>">
                    </div>
                    <div class='form-group'>
                        <label> distt</label>
                        <input type='text' name='distt' class='form-control' value="<?php echo $row['distt']; ?>">
                    </div>
                    <div class='form-group'>
                        <label> country</label>
                        <input type='text' name='Country' class='form-control' value="<?php echo $row['Country']; ?>">
                    </div>
                    <div class='form-group'>
                        <label> pin</label>
                        <input type='number' name='Pincode' class='form-control' value="<?php echo $row['Pincode']; ?>">
                    </div>
                    <div class='form-group'>
                        <label> age</label>
                        <input type='number' name='age' class='form-control' value="<?php echo $row['age']; ?>">
                    </div>
                    <label>DOB</label>
                    <select name='DOB'>
             <?php
                        /**
                         * loop for date of month
                         * the initial value is one
                         * and the final is 31
                         
                         */
                        for ($i = 1; $i <= 31; $i++) {
                 ?>
                            <option value="<?php echo $i; ?>"> <?php echo $i;
                                                                ?></option>
                        <?php
                        }
                        ?>

                    </select>
                    <select name='DOB'>
                        <?php
                        // loop for month
                        for ($i = 1; $i <= 12; $i++) {

                        ?>
                            <option value="<?php echo $i; ?>"> <?php echo $i;
                                                                ?></option>
                        <?php

                        }

                        ?>

                    </select>
                    <select name='DOB'>

                        <?php
                        // loop for geting year
                        for ($i = 1980; $i <= date('Y'); $i++) {
                        ?>
                            <option value="<?php echo $i; ?>"> <?php echo $i;
                                                                ?></option>
                        <?php

                        }

                        ?>

                    </select>
                    <div class='form-group'>
                        <label> height</label>
                        <input type='number' name='height' class='form-control' value="<?php echo $row['height'] ?>">
                    </div>

            </div>

            <div class='col-lg-6'>

                <div class='form-group'>
                    <label> weight</label>
                    <input type='number' name='weight' class='form-control' value="<?php echo $row['weight'] ?>">
                </div>

                <div class='form-group'>

                    <label>Skin color</label>
                    <input type='text' name='skin' class='form-control' value="<?php echo $row['skin']; ?>">
                </div>
                <div class='form-group'>
                    <label> hair color</label>
                    <input type='text' name='hair' class='form-control' value="<?php echo $row['hair'] ?>">
                </div>

                <div class='form-group'>
                    <label class='control-label col-sm-3' >Gender</label>
                    <div class='col-sm-6'>
                        <div class='row'>
                            <div class='col-sm-4'>
                                <label class='radio-inline'>
                                    <input type='radio' name='gender' value='female'  checked>Female
                                </label>
                            </div>
                            <div class='col-sm-4'>
                                <label class='radio-inline'>
                                    <input type='radio' name='gender' value='male' checked>Male
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <input type='hidden' name='action' value='edit'>
                <input type='submit' class='btn btn-danger' name='submit' value = 'save'>
</form>
</div>

</div>

</div>
<?php
    }
}
    }
    catch ( PDOException $e ) {

        die( "ERROR: Could not able to execute $sql. ".$e->getMessage() );
        
        }
        
        unset( $pdo );
    
?>