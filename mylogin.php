
<?php

require_once('conn.php');
include("usersclass.php");

extract($_POST);

$login =  new users;


if ($login->signin($email,$pass)) {

$login->jumptolink("home.php ? aim=pass");

}

else {

$login->jumptolink("login.php?aim=fail");	
}

?>



