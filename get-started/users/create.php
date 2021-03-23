<?php

require_once __DIR__ . '/../bootstrap/app.php';

require_once file_header();
?>
<!-- creat user by admin -->
<div class = 'container'>
<div class = 'contain'>
<h2 class = 'tag_h2'>Create user</h2>

</div>
<form class = 'form-group' method = 'post'>
<form method = 'post'>
<input type = 'hidden' value = 'create_user' name = 'action'>
<label class = 'labels'>Name</label>
<input type = 'text' name = 'name' class = 'form-control'><br>
<label class = 'labels'>Email Address:</label>
<input type = 'email' name = 'email' class = 'form-control'><br>
<label class = 'labels'>Password: </label>
<input type = 'password' name = 'password' class = 'form-control'><br>
<label class = 'labels'> Confirm Password:</label>
<input type = 'password' name = 'cPass' class = 'form-control'><br>
<label for = 'Role'>Select Role</label><br>
<select name = 'Role' id = 'Role'>
<option value = '' selected>Select role</option>
<option value = 'admin'>admin</option>
<option value = 'editor'>editor</option>
<option value = 'user'>user</option><br>
</select><br>
<input type = 'submit' class = 'btn btn-danger' name = 'submit' value = 'submit'>
</form>

already have an account?
<a href = 'login.php'>Login here</a>
<?php
require_once file_footer()
?>