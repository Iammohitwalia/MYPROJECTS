<?php
    // 28 sep 2020
    // session_start();
    require_once  __DIR__ . "/../../../connection.php";
    /**
     * Get the users from users.json file
     * and decode this
     * @var $get_user
     * @return aarray all users store in users.json
     */
session_start();
    if (isset($_POST['login'])) {
        // $name = $_POST['Name'];

        $email = $_POST['email'];
        $password = $_POST['password'];


        try {
            $sql = "SELECT * FROM users WHERE (email='$email' AND password='$password')";
            // print_r($query);
            $query = $conn->prepare($sql);

            $query->execute();
            $results = $query->fetch(PDO::FETCH_ASSOC);
            // get the fields
            // store fields in session
            $_SESSION['email'] = $results['email'];
            $_SESSION['username'] = $results['name'];
            $_SESSION['userRole'] = $results['Role'];
            $_SESSION['id'] = $results['id'];
        } catch (PDOException $e) {
            echo "There are error: " . $e->getMessage();
        }
        if ($query->rowCount() > 0) {
            echo "success";
        } else {
            echo " alert('Invalid Details')";
        }
    }
    // $get_user = file_get_contents(file_user());

    // $users = json_decode($get_user, true);


    // // filter all decoded users

    // $filter = array_filter($users, function ($users) {
    // // check the email and password that enter in login form is equal to register user

    // if ($_POST['email'] == $users['email']) {
    // // $mail = $users['email'];
    // if ($_POST['password'] == $users['password']) {
    // // store filed in session variables
    // // $name = $users['Name'];
    // $_SESSION['username'] =$users['Name'];
    // $_SESSION['email'] =$users['email'];
    // $_SESSION['role'] = $users['role'];
    // $_SESSION['id']=$users['id'];
    // return true;
    // }
    // }
    // });

    // if ($filter) {
    // echo "Welcome" . $_SESSION['username'];
    // } else {
    // echo "user not found";
    // }
    // /**
    // * if username and password is match with users.json data then redirect to dashboard.php
    // */
    if (isset($_SESSION['username']));
    header('Location:dashboard.php');

    ?>