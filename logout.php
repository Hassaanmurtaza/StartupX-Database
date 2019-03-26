
<?php

require_once('conn.php');
include("usersclass.php");

$_SESSION['email']=null;
session_destroy();
header("location:home.php");

?>



