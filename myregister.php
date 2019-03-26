
<?php

require_once('conn.php');


extract($_POST);


$myquery="SELECT email from users where email='$email'";
$querryArray=mysqli_query($connection,$myquery);
$querryArray->fetch_array(MYSQLI_ASSOC);

if($querryArray->num_rows>0){
    
    
    header("location:login.php?aim=2");
    
}
else{
    $sql="INSERT INTO `users`(`email`, `name`,`password`) VALUES ('$email','$name','$pass')";
    if (mysqli_query($connection, $sql)) {
        header("location:login.php?aim=1");
    }
    else{
        header("location:register.php?aim=fail");
    }
    
}


?>



