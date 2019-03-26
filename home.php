<!DOCTYPE html>
<html lang="en">
<?php require('conn.php');
  include('usersclass.php');
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
            <li class="nav-item active hvr-shadow">
              <a class="nav-link" href="./home.php">Home
                <span class="sr-only">(current)</span>
              </a>
            </li>
            <li class="nav-item hvr-shadow">
              <a class="nav-link" href="./aboutus.php">About</a>
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

    <div class="container hvr-shadow" style="padding-left:0; padding-right:0">
      <!-- IMAGE STARTS-->
      <div  style="margin:auto;">
  <div id="carouselHeader" class="carousel slide" data-ride="carousel">
    
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
      <img id="cimage" class="d-block img-fluid hvr-bob" src="images/category/food.jpg" alt="First slide">
      <div class="carousel-caption d-block hvr-grow lead">
        
      </div>
    </div>
    <div class="carousel-item">
      <img id="cimage" class="d-block img-fluid  hvr-bob" src="images/category/photography.jpg" alt="Second slide">
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
                        <div class="input-group col-sm-12 col-md-8" style="margin:0 auto;">
                         
                            <input type="text" name="search" class="  search-query form-control" placeholder="Search" />
                            <input class="btn btn-primary hvr-forward" type="submit" value="Go">
        
                            
                        </div>
        </form>
                    </div>

              

      <div class="content col-md-12">
        <h1>StartupX</h1>
        <p class = "hidden-xs-down"><strong>Browse our collection of Pakistani Startups!</strong></p>
         </div>
    </div>
    
    
    <!-- Page Content -->
    <div class="container">

          
      
  <div class="row mt-2">

      
              


      <?php 
          
            
          $sql = "SELECT id,name,category,tagline,description FROM startups order by sales asc limit 1";
          $results = mysqli_query($connection,$sql);
          
          if($rowitem = mysqli_fetch_array($results)) {
            $x=$rowitem['category'];
            $sql2="SELECT color from category where '$x'=name";
            $results2 = mysqli_query($connection,$sql2);
            if($rowitem2 = mysqli_fetch_array($results2)) {
              $mycolor=$rowitem2['color'];
            }

            ?>
            <div class="col-12">
            <div class="column"> 
              
              <!-- Post-->
              <div class="post-module"> 
                <!-- Thumbnail-->
                <div class="thumbnail">
                  <div class="date  hvr-grow"  style="background:<?php echo $mycolor;?>"> <a href="./startup.php?find=<?php echo $rowitem['id']?>">
                    <div class="day"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    </a> </div>
                  <img src="images/startups/<?php echo $rowitem['id'];?>/dp.jpg" style="width:50%; height:100%;" class="img-responsive" alt=""> </div>
                <!-- Post Content-->
                <div class="post-content" style="top:0; left:50%; width:50%;">
                  <div class="category" style="top:0px;left:-100%;background:<?php echo $mycolor;?>"><?php echo $rowitem['category']?></div>
                  <h1 class="title" ><a style="color:black;" href="./startup.php?find=<?php echo $rowitem['id']?>"><?php echo $rowitem['name']?></a></h1>
                  <h2 class="sub_title"  style="color:<?php echo $mycolor;?>"><?php echo $rowitem['tagline'];?></h2>
                  <p class="hidden-xs-down"><?php echo $rowitem['description']?></p>
                  <div>
                    <span class="fa fa-star fa-lg" style="color:#d8c72b;"></span>
                    <span class="fa fa-star fa-lg" style="color:#d8c72b;"></span>
                    <span class="fa fa-star fa-lg" style="color:#d8c72b;"></span>
                    <span class="fa fa-star fa-lg" style="color:#d8c72b;"></span>
                    <span class="fa fa-star fa-lg" style="color:#d8c72b;"></span>
          </div>
                </div>
                
              </div>
            </div>
          </div>
    
            
          <!-- /.col-md-4 -->
          <?php
          }
          ?>
          </div>



      <!-- Heading Row -->
      
      
      <!-- /.row -->

      <!-- Call to Action Well -->
      <div class="card text-white my-4 text-center">
        <div class="card-body btn btn-warning">
          <a href="./search.php" class="text-white m-0"><strong>Click here to browse all our startups!</strong></a>
        </div>
      </div>

      


      <!-- Content Row -->
     
      <div class="row">

      
              


      <?php 
          
            
          $sql = "SELECT id,name,category,tagline,description FROM startups order by sales asc limit 3";
          $results = mysqli_query($connection,$sql);
          
          while($rowitem = mysqli_fetch_array($results)) {
            $x=$rowitem['category'];
            $sql2="SELECT color from category where '$x'=name";
            $results2 = mysqli_query($connection,$sql2);
            if($rowitem2 = mysqli_fetch_array($results2)) {
              $mycolor=$rowitem2['color'];
            }

            ?>
            <div class="col-sm-6 col-md-4 mb-4">
            <div class="column"> 
              
              <!-- Post-->
              <div class="post-module"> 
                <!-- Thumbnail-->
                <div class="thumbnail">
                  <div class="date hvr-grow"  style="background:<?php echo $mycolor;?>"> <a href="./startup.php?find=<?php echo $rowitem['id']?>">
                    <div class="day"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    </a> </div>
                  <img  src="images/startups/<?php echo $rowitem['id'];?>/dp.jpg"  class="img-responsive" alt=""> </div>
                <!-- Post Content-->
                <div class="post-content hvr-float">
                  <div class="category" style="background:<?php echo $mycolor;?>"><?php echo $rowitem['category']?></div>
                  <h1 class="title"><a style="color:black;" href="./startup.php?find=<?php echo $rowitem['id']?>"><?php echo $rowitem['name']?></a></h1>
                  <h2 class="sub_title"  style="color:<?php echo $mycolor;?>"><?php echo $rowitem['tagline'];?></h2>
                  <p ><?php echo $rowitem['description']?></p>
                </div>
              </div>
            </div>
          </div>
    
            
          <!-- /.col-md-4 -->
          <?php
          }
          ?>


        <!-- /.col-md-4 -->
        
        <!-- /.col-md-4 -->

      </div>
<!--CAROUSEL-->

<div class = "col-12" style="margin:auto;">
  <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
      <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
    </ol>
    <div class="carousel-inner" role="listbox">
      <div class="carousel-item active">
        <img id="cimage" class="d-block img-fluid hvr-bob" src="images/category/food.jpg" alt="First slide">
        <div class="carousel-caption d-block hvr-grow lead">
          <h3><a href="./search.php?category=food" style="color:white">Food</a></h3>
          <p>Order a cupcake or have a delicious Pizza delivered to your doorstep.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img id="cimage" class="d-block img-fluid  hvr-bob" src="images/category/photography.jpg" alt="Second slide">
        <div class="carousel-caption d-block hvr-grow lead">
          <h3><a href="./search.php?category=photography" style="color:white">Photography</a></h3>
          <p>Hire a photographer for your wedding or a friend's birthday.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img id="cimage" class="d-block img-fluid  hvr-bob" src="images/category/clothing.jpg" alt="Third slide">
        <div class="carousel-caption d-block hvr-grow lead">
          <h3><a href="./search.php?category=clothing" style="color:white">Clothing</a></h3>
          <p>From hand-knitted sweaters to custom-printed hoodies, there is a bit of everything for you.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img id="cimage" class="d-block img-fluid  hvr-bob" src="images/category/art.jpg" alt="Fourth slide">
        <div class="carousel-caption d-block hvr-grow lead">
          <h3><a href="./search.php?category=art" style="color:white">Art</a></h3>
          <p>The earth without art is just eh.</p>
        </div>
      </div>
      <div class="carousel-item">
        <img id="cimage" class="d-block img-fluid  hvr-bob" src="images/category/jewellery.jpg" alt="Fifth slide">
        <div class="carousel-caption d-block hvr-grow lead">
          <h3><a href="./search.php?category=jewellery" style="color:white">Jewellery</a></h3>
          <p>Every piece of jewelry tells a story.</p>
        </div>
      </div>
    </div>
    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
  </div>

  <!--CAROUSEL END-->


      
  <div class="row">

      
              


      <?php 
          
            
          $sql = "SELECT id,name,category,tagline,description FROM startups order by sales asc limit 10";
          $results = mysqli_query($connection,$sql);
          
          while($rowitem = mysqli_fetch_array($results)) {
            $x=$rowitem['category'];
            $sql2="SELECT color from category where '$x'=name";
            $results2 = mysqli_query($connection,$sql2);
            if($rowitem2 = mysqli_fetch_array($results2)) {
              $mycolor=$rowitem2['color'];
            }

            ?>
            <div class="col-sm-6 mb-4">
            <div class="column"> 
              
              <!-- Post-->
              <div class="post-module"> 
                <!-- Thumbnail-->
                <div class="thumbnail">
                  <div class="date  hvr-grow"  style="background:<?php echo $mycolor;?>"> <a href="./startup.php?find=<?php echo $rowitem['id']?>">
                    <div class="day"><i class="fa fa-bars" aria-hidden="true"></i></div>
                    </a> </div>
                  <img src="images/startups/<?php echo $rowitem['id'];?>/dp.jpg" class="img-responsive" alt=""> </div>
                <!-- Post Content-->
                <div class="post-content hvr-float">
                  <div class="category" style="background:<?php echo $mycolor;?>"><?php echo $rowitem['category']?></div>
                  <h1 class="title"><a style="color:black;" href="./startup.php?find=<?php echo $rowitem['id']?>"><?php echo $rowitem['name']?></a></h1>
                  <h2 class="sub_title"  style="color:<?php echo $mycolor;?>"><?php echo $rowitem['tagline'];?></h2>
                  <p><?php echo $rowitem['description']?></p>
                </div>
              </div>
            </div>
          </div>
    
            
          <!-- /.col-md-4 -->
          <?php
          }
          ?>


        <!-- /.col-md-4 -->
        
        <!-- /.col-md-4 -->

      </div>
<!--CAROUSEL-->
      <!-- /.row -->

    
    <!-- /.container -->

    <!-- Footer -->
    
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
