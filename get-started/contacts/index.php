<?php
require_once '../connection.php';
session_start();
require_once __DIR__ . '/../bootstrap/app.php';
require_once file_header();

if (isset($_SESSION['username'])) {
    // $get_contact = file_get_contents(file_contact());
    // $datacontact = json_decode($get_contact, true);
    try{
        $id=$_SESSION['id'];
        $sql = "SELECT * FROM contacts WHERE user_id='$id'";
        // print_r($sql);
        $query = $conn->prepare($sql);
        // print_r($query);
        // $query-> bindParam(':email', $email, PDO::PARAM_STR);
        // $query-> bindParam(':password', $password, PDO::PARAM_STR);
        $query->execute();
        $results = $query->fetchAll(PDO::FETCH_ASSOC);

        //  
        ?>
       <?php
        //    $get_user = file_get_contents(file_user());
        //     $results = json_decode($get_user, true);
        // Start the loop for all users

      
?>
    <!-- create contact table -->
    <div class="container">
        <h4><a href="add.php">create new</a> </h4>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">image</th>
                    <th scope="col">name</th>
                    <th scope="col">email</th>
                    <th scope="col">mobile number</th>
                    <th scope="col">actions</th>

                </tr>
            </thead>
            <?php
        // //  filter the  contact data 
        //     $filter = array_filter($datacontact, function ($data) {
        //         if ($data['user_id'] == $_SESSION['id']) {
        //             foreach ($data as $result) {
        //                 return $result;
        //             }
        //         }
        //     });
        //     foreach ($filter as $contact) {


            foreach ($results as $contact) {
            ?>
                <tbody>
                    <tr>
                        <td><img src="../storage/app/public/<?php echo 'contact'.$contact['img'];?>"height="50px" width="50px"></td>
                        <td><?php echo $contact['name'] ?></td>
                        <td><?php echo $contact['email'] ?></td>
                        <td><?php echo $contact['mobile'] ?></td>

                        <td>
                            <a href="update.php?id=<?php echo $contact['id'] ?>">edit</a>
                            <a href="view.php?id=<?php echo $contact['id'] ?>">view</a>
                            <a href="destroy.php?id=<?php echo $contact['id'] ?>">delete</a>
                        </td>




                    </tr>
                    <tr>


                    </tr>
                </tbody>
            <?php
            }
            ?>
        </table>

    </div>
<?php

}catch(PDOException $e){
    echo $e->getMessage();
}



}
?>