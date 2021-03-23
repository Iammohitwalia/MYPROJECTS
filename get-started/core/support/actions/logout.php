<?php
//start thye session
session_start();
//destroy the session
session_destroy();
//redirecting to the login page after the session destroy.
header( 'Location:../login.php' )
?>