<!DOCTYPE html>
<html lang = 'en'>
<head>
<meta charset = 'utf-8'>
<meta name = 'viewport' content = 'width=device-width, initial-scale=1, shrink-to-fit=no'>
<title>Mohit.ewb</title>
<link rel = 'stylesheet' href = 'https://fonts.googleapis.com/css?family=Merienda+One'>
<link rel = 'stylesheet' href = 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css'>
<link rel = 'stylesheet' href = 'https://fonts.googleapis.com/icon?family=Material+Icons'>
<link rel = 'stylesheet' href = 'https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css'>
<script src = 'https://code.jquery.com/jquery-3.5.1.min.js'></script>
<script src = 'https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js'></script>
<script src = 'https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js'></script>
<link href = '//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css' rel = 'stylesheet' id = 'bootstrap-css'>
<script src = '//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js'></script>
<script src = '//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

</head>
<body>
<header style = 'background-color:#e9ecef'>
<nav class = 'navbar navbar-inverse'>
<div class = 'container'>
<a href = '__DIR__ . /../../users/index.php' class = 'navbar-brand'> Mohit </a>
<button type = 'button' class = 'navbar-toggler' data-toggle = 'collapse' data-target = '#navbarCollapse'>
<span class = 'navbar-toggler-icon'></span>
</button>

<div class = 'nav-item dropdown'>
<a class = 'fa fa-bars' href = '!' id = 'navbarDropdownMenuLink' role = 'button' data-toggle = 'dropdown' aria-haspopup = 'true' aria-expanded = 'false'>
<?php

if ( isset( $_SESSION['username'] ) ) {

    echo $_SESSION['username'];
}
?>
</a>
<div class = 'dropdown-menu'>
<a href = '__DIR__ . /../../users/profile.php' class = 'dropdown-item'><i class = 'fa fa-user-o'></i> Profile</a>
<a class = 'dropdown-item' href = '__DIR__ . /../../contacts/index.php' role = 'button'><i class = 'fa fa-users' aria-hidden = 'true'>Contact</i>
<div class = 'dropdown-divider'></div>
<a class = 'dropdown-item'>
<form method = 'post'>
<input type = 'hidden' name = 'action' value = 'logout'>
<i class = 'material-icons'>&#xE8AC;
</i> <input type = 'submit' value = 'logout'>
</form>
</a>
</div>
</div>
</nav>
</header>

