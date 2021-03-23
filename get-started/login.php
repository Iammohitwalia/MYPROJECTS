<?php require_once __DIR__ . '/bootstrap/app.php';
?>
<?php require_once file_header();

if ( isset( $_SESSION['username'] ) ) {
    header( 'Location:dashboard.php' );
}
?>
<h2>login here </h2>
<div class = 'jumbotron'>
<div class = 'container'>
<div class = 'row justify-content-center'>
<div class = 'col-md-6'>
<form method = 'POST'>
<input type = 'hidden' value = 'login' name = 'action'>
<label class = 'labels'> Email:</label>
<input type = 'email' name = 'email'><br>
<label class = 'labels'> password:</label>
<input type = 'password' name = 'password'><br>
<a span class = 'forget' href = '#'>Forget password?</a>
<input type = 'submit' value = 'login' name = 'login'><br>
<span>don, t have account? <a href = 'register.php'>Register</a> </span>

</form>
</div>
</div>
</div>
</div>

<?php
//calling the file_footer() to print the footer in login page
require_once file_footer();
?>

