
<!DOCTYPE html>
<html lang="en">
<?php

require_once('conn.php');
include("usersclass.php");

extract($_POST);


if( $_SESSION==null ){
    header("location:login.php");
}
elseif(isset($item)){
    $a=(int)$item;
    $b=(int)$startup;
    $c=$_SESSION['email'];

    $myq="SELECT address from users where email='$c'";
    
  $myq2 = mysqli_query($connection,$myq);
  if($myrow = mysqli_fetch_array($myq2)) {
      $myadd=$myrow['address'];
  }
  if($myadd==""){
    $myadd="No address specified";
  }
    $add=$myadd;



    $d=(int)$cost;
    $sql="INSERT INTO `orders`(`startupID`, `itemID`,`customerID`,`price`,`address`) VALUES ('$b','$a','$c','$d','$add')";
  

  if (mysqli_query($connection, $sql)) {
    
    echo '<script language="javascript">';
    echo 'alert("Order Successfully Placed")';
    echo '</script>';
    
} else {
    header("location:error.php");
}
 
}
elseif(isset($oldpass)){
  $var1=$_SESSION['email'];
  $myquery="SELECT password from users where email='$var1'";

  $myres = mysqli_query($connection,$myquery);
  if($rowitem = mysqli_fetch_array($myres)) {
      $pass=$rowitem['password'];
  }

  if($oldpass==$pass){

    $sql="UPDATE `users` SET `name`='$name',`password`='$newpass',`contact`='$contact',`address`='$address' where `email`='$var1'";

    if (mysqli_query($connection, $sql)) {
      echo '<script language="javascript">';
      echo 'alert("Profile Updated.")';
      echo '</script>';
    }
    else{
      echo '<script language="javascript">';
      echo 'alert("Error: Profile not updated. Please try again.")';
      echo '</script>';
    }
    


    

  }
  else{
    echo '<script language="javascript">';
    echo 'alert("Error: Incorrect Password. Please try again.")';
    echo '</script>';
  }
}


?>


  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>StartupX</title>
    <link rel="icon" href="images/favicon-16x16.png">
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="node_modules/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/styles.css">
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/small-business.css" rel="stylesheet">
    <link href ="css/hover-min.css" rel="stylesheet">
        <link href ="css/zoomhover.css" rel="stylesheet">
    
    <!-- Custom styles for this template -->
    

  </head>

  <body>
 
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
    <div class="container">
      <a class="navbar-brand" href="#">StartupX</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item    hvr-shadow">
            <a class="nav-link" href="./home.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item hvr-shadow">
            <a class="nav-link" href="./aboutus.html">About</a>
          </li>
          
          <li class="nav-item hvr-shadow" >
            <a class="nav-link" href="#">Contact</a>
          </li>
          <?php
          if( $_SESSION==null ){?>
          <li><a type = "button cd-signin" class="btn btn-outline-primary my-2 my-sm-0" href="./login.php">Sign in</a></li>
          <li><a type = "button cd-signup" class="btn btn-primary my-2 my-sm-0" href="./register.php" >Sign up</a></li>
          
        <?php }
        else{?>
          <li><a type = "button cd-signin" class="btn hvr-fade my-2 my-sm-0" style="border-radius: 30px;" href="./myorders.php"><i class = "fa fa-user" aria-hidden="true"></i></a></li>
          <a class="btn btn-primary" href="./logout.php">Logout</a>

          <?php
        }?>
        

        </ul>
      </div>
    </div>
  </nav>


  <div class= "container">

  <nav class="nav nav-tabs ml-4" id="myTab" role="tablist">
  <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">Profile</a>
  <a class="nav-item nav-link active" id="nav-contact-tab" data-toggle="tab" href="#nav-contact" role="tab" aria-controls="nav-contact" aria-selected="false">My Orders</a>
  
</nav>

<div class="tab-content" id="nav-tabContent">
  
  <div class="tab-pane fade show " id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
    
  <div class = "row" > 
              <div class ="col-md-10 center" style="margin:auto; margin-bottom:50px;">


              <div class="card">

              <?php
              $var1=$_SESSION['email'];
  $myquery2="SELECT name,contact,address from users where email='$var1'";

  $myres2 = mysqli_query($connection,$myquery2);
  if($rowitem2= mysqli_fetch_array($myres2)) {
      $a=$rowitem2['name'];
      
      $b="value=\"".$rowitem2['contact']."\"";
      if($b=="value=\"\""){
        $b="placeholder=\"Enter your phone number\"";
      }
      
      $c="value=\"".$rowitem2['address']."\"";
      if($c=="value=\"\""){
        $c="placeholder=\"Enter your address\"";
      }
  }
?>

  <div class="card-block">
    <h4 class="card-title">Profile Info</h4>
    <form action="myorders.php" method="post">
    <div class="form-group">
    <label for="myname">Name</label>
    <input type="text" name="name" required="required" class="form-control" id="myname" aria-describedby="emailHelp" value="<?php echo $a;?>">
  </div>
 
    
  <div class="form-group">
    <label for="mycontact">Contact</label>
    <input type="text" name="contact" required="required" class="form-control" id="mycontact" <?php echo $b;?>>
  </div>
  <div class="form-group">
    <label for="myaddress">Address</label>
    <input type="text" name="address" required="required" class="form-control" id="myaddress" <?php echo $c;?>>
  </div>

  <div class="form-group">
    <label for="mypassold">Old Password</label>
    <input type="password" name="oldpass" required="required" class="form-control" id="mypassold" placeholder="Old Password">
  </div>

  <div class="form-group">
    <label for="mypassnew">New Password</label>
    <small>(Enter same password if you don't want to change it)</small>
    <input type="password" name="newpass" required="required" class="form-control" id="mypassnew" placeholder="New Password">
  </div>
  
<input type="submit" class="btn btn-primary" value="Update Info">
      </form>



   
  </div>
</div>

      </div> 
      </div> </div>
  <div class="tab-pane fade show active" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">


  <div class = "row" > 
              <div class ="col-md-10 center" style="margin:auto; margin-bottom:50px;">
                    <h1>My Orders</h1>
              <div id="accordion" role="tablist" >
    
<?php
            
            $c=$_SESSION['email'];
            $sql = "SELECT startupID,address,itemID,orderID,status,price,dateCreated,dateModified FROM orders where customerID = '$c' order by datecreated desc";

            $results = mysqli_query($connection,$sql);
            $count=0;
            while($rowitem = mysqli_fetch_array($results)) {
                $count=$count+1;

                $a1=(int)$rowitem['itemID'];
                $a2=(int)$rowitem['startupID'];

                $sql2 = "SELECT name FROM items where itemID= '$a1' and ID='$a2'";
                $results2 = mysqli_query($connection,$sql2);            
                if($rowitem2 = mysqli_fetch_array($results2)) {
                  $myitem=$rowitem2['name'];
                  
                }

                
                $sql3 = "SELECT name FROM startups where id = '$a2'";
                $results3 = mysqli_query($connection,$sql3);            
                if($rowitem3 = mysqli_fetch_array($results3)) {
                  $mystartup=$rowitem3['name'];
                 
                }

                if($rowitem['status']=="success"){
                  $bcolor="success";
                  $btext="Successful!";
                  
                }
                elseif($rowitem['status']=='processing'){
                  $bcolor="basic";
                  $btext="Processing";
                }
                else{
                  $bcolor="danger";
                  $btext="Cancelled";
                }


               
              ?>

      <div class="card ">
        <div class="card-header bg-inverse" role="tab" id="heading<?php echo $rowitem['orderID'];?>">
        <a style="color:white "; data-toggle="collapse" href="#collapse<?php echo $rowitem['orderID'];?>" aria-expanded="true" aria-controls="collapse<?php echo $rowitem['orderID'];?>">
            
              
        
          <table class="table">
  <thead class="thead-inverse">
    <tr>
      <th><small>Order #: </small><?php echo $rowitem['orderID'];?></th>
      
      <th><small>Date : </small><?php echo $rowitem['dateCreated'];?></th>
      <th><small>Cost : </small><?php echo $rowitem['price'];?></th>
      <th> <a class="btn" style="color:white "; data-toggle="collapse" href="#collapse<?php echo $rowitem['orderID'];?>" aria-expanded="true" aria-controls="collapse<?php echo $rowitem['orderID'];?>"><i class="fa fa-arrow-down" aria-hidden="true"></i></a></th>
    </tr>
  </thead></table>
           
         </a>
        </div>
              




        <div id="collapse<?php echo $rowitem['orderID'];?>" class="collapse <?php if($count==1){echo "show";}?>" role="tabpanel" aria-labelledby="heading<?php echo $rowitem['orderID'];?>" data-parent="#accordion">
          <div class="card-body">
            <div class="row">
          <div class = "col-md-7">
         <h3 style="border-bottom:3px solid black; padding-bottom:5px;"><?php echo $myitem;?> <small style="color:gray">by <?php echo $mystartup;?></small></h3><br>
         <p><strong>Address:</strong><br> 
         <?php echo $rowitem['address'];?></p>
            </div>
            <div class="col-md-5">
          <h3  style="border-bottom:3px solid black; padding-bottom:5px;">Order Status: <button class="btn btn-<?php echo $bcolor?>"><?php echo $btext?></button></h3><br>
          <p><strong>Last Updated:</strong><br>
          <?php echo $rowitem['dateCreated'];?></p>
            </div>

            
            </div>
          
        
        </div>
        </div>
      </div>

            <?php } if($count==0){
              echo "<p>You have no orders.</p>";
            }?>

    </div>
    </div>
            </div>
  </div>
</div>



    
    
           
              
            </div>
    
            <footer class = "footer py-5 bg-lite">
            <div class = "container">
              <div class = "row">             
                <div class = "col-6 col-sm-4">
                  <h5>Links</h5>
                  <ul class = "list-unstyled">
                    <li><a href="./home.php">Home</a></li>
                    <li><a href="./aboutus.php">About</a></li>
                    
                    <li><a href="./contactus.html">Contact</a></li>
                  </ul>
                </div>
                <div class = "col-6 col-sm-4">
                  <h5>Our Address</h5>
                  <address>
                    IBA<br>
                                KU Circular Rd, Karachi 75270<br>
                    Pakistan<br>
                    <i class = "fa fa-phone fa-lg"></i>: +03362550799<br>
                    
                    <i class = "fa fa-envelope fa-lg"></i>: <a href="mailto:confusion@food.net">contactus@startupx.com</a>
                   </address>
                </div>
                <div class = "col-12 col-sm-4 align-self-center mb-4">
                   <div style="text-align:center">
                    <a class="btn btn-social-icon btn-google-plus" href="http://google.com/+"><i class="fa fa-google-plus"></i></a>
                    <a class="btn btn-social-icon btn-facebook" href="http://www.facebook.com/profile.php?id="><i class="fa fa-facebook"></i></a>
                    <a class="btn btn-social-icon btn-linkedin" href="http://www.linkedin.com/in/"><i class="fa fa-linkedin"></i></a>
                    <a class="btn btn-social-icon btn-twitter" href="http://twitter.com/"><i class="fa fa-twitter"></i></a>
                    <a class="btn btn-social-icon btn-youtube" href="http://youtube.com/"><i class="fa fa-youtube"></i></a>
                    <a class="btn btn-social-icon" href="mailto:"><i class="fa fa-envelope-o"></i></a>
                  </div>
                </div>
               </div>
               <div class = "row justify-content-center">             
                <div class = "col-auto">
                  <p>© Copyright 2017 StartupX</p>
                </div>
               </div>
            </div>
          </footer>


            <script src="node_modules/jquery/dist/jquery.min.js"></script>
            <script src="node_modules/tether/dist/js/tether.min.js"></script>
            <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
            
       
          
      </body>
    
    </html>
    