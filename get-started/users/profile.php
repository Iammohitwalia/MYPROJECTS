    <?php
    require_once '../connection.php';
    session_start();
    require_once '../bootstrap/app.php';
    require_once file_header();

    /**
     * get the user profile and decode it
     * store the current user id in a index variable
     * the current user id is greater then the first index of profile data
     * then ve use decrement operator
     * i.e --$index
     */
    $id=$_SESSION['id'];
    $sql = "SELECT * FROM `userprofile` WHERE user_id = '$id'";

    $query = $conn->prepare($sql);
    // $query-> bindParam(':email', $email, PDO::PARAM_STR);
    // $query-> bindParam(':password', $password, PDO::PARAM_STR);
    $query->execute();
    $users = $query->fetch(PDO::FETCH_ASSOC);
    // if(isset($_SESSION['username'])){
    // $get_profile = file_get_contents(file_profile());
    // $data_profile = json_decode($get_profile, true);
    // $index = $_SESSION['id'];
    // --$index;
    // $users = $data_profile[$index];
    // ?>
    <div class='container'>
        <div class="profile-header-content">
            <div class="profile-header-img">
                <img src="https://bootdey.com/img/Content/avatar/avatar7.png" alt="" />
            </div>
            <form>
                <div class='row'>
                    <div class='col-md-6'>
                        <form method='post'>
                            <label class='labels'><strong>Name</strong></label>
                            <?php echo $_SESSION['username'] ?><br>
                            <label class='labels'><strong>Email</strong></label>
                            <?php echo $_SESSION['email'] ?><br>
                            <label class='labels'><strong>Role</strong></label>
                            <?php echo $_SESSION['userRole'] ?><br>
                    </div>
                    <div class='col-md-6'>
                        <a href='../edit-profile.php' class='m-l-10'>Edit</a>
                    </div>
                </div>
                <hr>

                <div class='row'>
                    <div class='col-md-6'>
                        <label class='labels'><strong>Address</strong></label><br>
                        <?php echo $users['address'] ?><br>
                        <label class='labels'><strong>State</strong></label><br>
                        <?php echo $users['state'] ?><br>
                        <label class='labels'><strong>Distt</strong></label><br>
                        <?php echo $users['distt'] ?><br>
                        <label class='labels'><strong>Country</strong></label><br>
                        <?php echo $users['Country'] ?><br>
                        <label class='labels'><strong>Pin</strong></label><br>
                        <?php echo $users['Pincode'] ?><br>
                        <label class='labels'><strong>Age</strong></label><br>
                        <?php echo $users['age'] ?><br>
                    </div>
                    <div class='col-md-6'>
                        <label class='labels'><strong>DOB</strong></label><br>
                        <?php echo $users['DOB'] ?><br>
                        <label class='labels'><strong>Height</strong></label><br>
                        <?php echo $users['height'] ?><br>
                        <label class='labels'><strong>Weight</strong></label><br>
                        <?php echo $users['weight'] ?><br>
                        <label class='labels'><strong>Gender</strong></label><br>
                        <?php echo $users['gender'] ?><br>
                        <label class='labels'><strong>hair-Color</strong></label><br>
                        <?php echo $users['hair'] ?><br>
                        <label class='labels'><strong>skin-color</strong></label><br>
                        <?php echo $users['skin'] ?><br>
                    </div>
                </div>

            </form>
        </div>
  