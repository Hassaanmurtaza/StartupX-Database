<!DOCTYPE html>
<html lang="en">
<?php require('conn.php');
  include('usersclass.php');

  extract($_POST);

  

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
    <link href ="css/card-style.css" rel="stylesheet">

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
            <li class="nav-item hvr-shadow">
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
            <?php
          }?>
          

          </ul>
        </div>
      </div>
    </nav>

    
    <!-- login modal code -->
    
    <!--login modal code end-->

    <div class="container hvr-glow" style="padding-left:0; padding-right:0">
      <!-- IMAGE STARTS-->
      <div style="margin;auto;height:220px;">
  <div id="carouselHeader" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img id="cimage" class="d-block img-fluid hvr-bob" src="images/category/photography.jpg" alt="First slide">
        <div class="carousel-caption d-block hvr-grow lead">
          
        </div>
      </div>
      <div class="carousel-item">
        <img id="cimage" class="d-block img-fluid  hvr-bob" src="images/category/food.jpg" alt="Second slide">
        <div class="carousel-caption d-block hvr-grow lead">
          
        </div>
      </div>
      <div class="carousel-item">
        <img id="cimage" class="d-block img-fluid  hvr-bob" src="images/category/art.jpg" alt="Third slide">
        <div class="carousel-caption d-block hvr-grow lead">
          
        </div>
      </div>
    </div>
    
  </div>
  </div>

        
      

      <!-- IMAGE ENDS-->
       
        <div id="custom-search-input" class = "hvr-grow">
        <form action="search.php" method="post">
        <div class="input-group col-sm-12 col-md-8" style="top:-60px;margin:0 auto;">
         
            <input type="text" name="search" class="  search-query form-control" placeholder="Search" />
            <input class="btn btn-primary hvr-forward" type="submit" value="Go">

            
        </div>
</form>
                    </div>

              

      
    </div>


    <div class="container">

    <?php 
          if(!isset($search)){

            if(isset($_GET['category'])){
                $cat=$_GET['category'];
                $sql = "SELECT id,name,category,tagline,description FROM startups where category  like '%$cat%' limit 10";
                
              }
            else{
                $search="";
                $sql = "SELECT id,name,category,tagline,description FROM startups where name like '%$search%'";
            }
          }
          else{
          $sql = "SELECT id,name,category,tagline,description FROM startups where name like '%$search%'  or category  like '%$search%' limit 10";

        }
          $results = mysqli_query($connection,$sql);
          $count=0;
          while($rowitem = mysqli_fetch_array($results)) {
              $count=$count+1;
            $x=$rowitem['category'];
            $sql2="SELECT color from category where '$x'=name";
            $results2 = mysqli_query($connection,$sql2);
            if($rowitem2 = mysqli_fetch_array($results2)) {
              $mycolor=$rowitem2['color'];
            }

            ?>
      
  <div class="row mt-2 mb-2">

      
              


      
            <div class="col-12">
            <div class="column"> 
              
              <!-- Post-->
              <div class="post-module"> 
                <!-- Thumbnail-->
                <div class="thumbnail">
                  <div class="date hvr-grow"  style="background:<?php echo $mycolor;?>"> <a href="./startup.php?find=<?php echo $rowitem['id']?>">
                    <div class="day"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    </a> </div>
                  <img  src="images/startups/<?php echo $rowitem['id'];?>/dp.jpg" style="width:50%; top:50px;" class="img-responsive" alt=""> </div>
                <!-- Post Content-->
                <div class="post-content" style="top:0; left:50%; width:50%;">
                  <div class="category" style="top:0px;left:-100%;background:<?php echo $mycolor;?>"><?php echo $rowitem['category']?></div>
                  <h1 class="title" ><a style="color:black;" href="./startup.php?find=<?php echo $rowitem['id']?>"><?php echo $rowitem['name']?></a></h1>
                  <h2 class="sub_title"  style="color:<?php echo $mycolor;?>"><?php echo $rowitem['tagline'];?></h2>
                  <p><?php echo $rowitem['description']?></p>
                  
                </div>
                
              </div>
            </div>
          </div>
    
            
          <!-- /.col-md-4 -->
          
          </div>
          <?php
          }
          if($count<1){
           echo "<div class=\"row mt-4\"><p></p></div>";
          }
          ?>
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
    <!--
    <footer class="py-5 bg-dark">
      <div class="container">
        <p class="m-0 text-center text-white">Copyright &copy; Your Website 2017</p>
      </div>
     
    </footer>
  -->

    <!-- Bootstrap core JavaScript -->
    <!-- login script-->
    <script>
    
    </script>
    
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
		<script src="node_modules/tether/dist/js/tether.min.js"></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    
    
    <!--image switcher-->
    
      
      
    
      
  </body>

</html>
