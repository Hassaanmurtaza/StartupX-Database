<?php
require_once('conn.php');
session_start();
class users{
public $arr;
public $coursearr;
public $questionarr;

public function register($data)
{
include('conn.php');


$re = mysqli_query($connection, $data);
return true;
}


public function signin($email,$pass){
include('conn.php');
$myquery="SELECT email,password from users where email='$email' and password='$pass'";
$querryArray=mysqli_query($connection,$myquery);
$querryArray->fetch_array(MYSQLI_ASSOC);

if($querryArray->num_rows>0){
	
	$_SESSION['email']= $email;
	return true;
}
else{
	return false;
}

}






public function uprofile($uname){

include('conn.php');

$q2 = "SELECT * from userlogin where username='$uname'";  
$d = mysqli_query($connection, $q2);

$row=$d->fetch_array(MYSQLI_ASSOC);

if ($d->num_rows > 0) {

$this->arr[]=$row;

}

return $this->arr;


}


public function displaycourses(){

include('conn.php');

$q2 = "SELECT * from courses";  
$d = mysqli_query($connection, $q2);

while($row=$d->fetch_array(MYSQLI_ASSOC)){


$this->coursearr[]=$row;

}



return $this->coursearr;


}
public function viewquestions($course_id){

include('conn.php');

$q2 = "SELECT * from questions where course_id ='$course_id'";  
$d = mysqli_query($connection, $q2);

while($row=$d->fetch_array(MYSQLI_ASSOC)){


$this->questionarr[]=$row;

}



return $this->questionarr;



}






public function jumptolink($link){

header("location:".$link);

}




}


?>