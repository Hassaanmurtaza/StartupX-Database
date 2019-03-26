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
          <?php
        }?>
        

        </ul>
      </div>
    </div>
  </nav>

    
    



    <div class="container">
            
        <div class="row">
        
            <div class="col-lg-3 fixed-top hidden-md-down hvr-glow" style="background-color:white; top:55px;">
        
            <?php
           if( !isset($_GET['find'])){
            $_GET['find']=1;}
            
            $id=(int)$_GET['find'];
            
            $sql = "SELECT name,description FROM startups where id = '$id'";

            $results = mysqli_query($connection,$sql);
            if($rowitem = mysqli_fetch_array($results)) {
                $startupname=$rowitem['name'];
                
            echo "<div class=\"bg-inverse\" style=\"margin-left:-20px;margin-right:-15px;padding-left:15px;color:white;padding-top:10px;padding-bottom:10px;\"><h1 class=\"my-4  \">".$rowitem['name']."</h1>
            </div>
            <div class=\"bg-info\" style=\"margin-left:-20px;margin-right:-15px;padding-left:15px;color:white;padding-top:5px;padding-bottom:5px;\">
            <h2> Description</h2>
        </div>
            <p>".$rowitem['description']."</p>

            <div class=\"bg-info\" style=\"margin-left:-20px;margin-right:-15px;padding-left:15px;color:white;padding-top:5px;padding-bottom:5px;\">
            <h2>Contact Us</h2>
        </div>
        <p>help@startupx.com</p>
        <div class=\"bg-info\" style=\"margin-left:-20px;margin-right:-15px;padding-left:15px;color:white;padding-top:5px;padding-bottom:5px;\">
        <h2>Address</h2>
    </div>
    <p>123 Road,<br>Karachi,<br>Pakistan</p>

    
            "; ?><span class="fa fa-star fa-lg" style="color:#d8c72b;"></span>
            <span class="fa fa-star fa-lg" style="color:#d8c72b;"></span>
            <span class="fa fa-star fa-lg" style="color:#d8c72b;"></span>
            <span class="fa fa-star fa-lg" style="color:#d8c72b;"></span>
            <span class="fa fa-star fa-lg" style="color:#d8c72b;"></span>
            </div>
            <div class="col-lg-3 hidden-lg-up" style="background-color:white;">
        
            <?php
            
            echo "<div class=\"bg-inverse\" style=\"margin-left:-20px;margin-right:-15px;padding-left:15px;color:white;padding-top:10px;padding-bottom:10px;\"><h1 class=\"my-4  \">".$rowitem['name']."</h1>
            </div>
            <div class=\"bg-info\" style=\"margin-left:-20px;margin-right:-15px;padding-left:15px;color:white;padding-top:5px;padding-bottom:5px;\">
            <h2> Description</h2>
        </div>
        <p>".$rowitem['description']."</p>
        
                    <div class=\"bg-info\" style=\"margin-left:-20px;margin-right:-15px;padding-left:15px;color:white;padding-top:5px;padding-bottom:5px;\">
                    <h2>Contact Us</h2>
                </div>
                <p>help@startupx.com</p>
                <div class=\"bg-info\" style=\"margin-left:-20px;margin-right:-15px;padding-left:15px;color:white;padding-top:5px;padding-bottom:5px;\">
                <h2>Address</h2>
            </div>
            <p>123 Road,<br>Karachi,<br>Pakistan</p>
        
            
                    "; ?><span class="fa fa-star fa-lg" style="color:#d8c72b;"></span>
                    <span class="fa fa-star fa-lg" style="color:#d8c72b;"></span>
                    <span class="fa fa-star fa-lg" style="color:#d8c72b;"></span>
                    <span class="fa fa-star fa-lg" style="color:#d8c72b;"></span>
                    <span class="fa fa-star fa-lg" style="color:#d8c72b;"></span>
            </div>
        
        
        <div class="col-lg-9 push-lg-3" style="background-color:rgb(175, 174, 177);">
                
            <div id="carouselExampleIndicators" class="carousel slide my-4"  data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active">
                <img class="d-block img-fluid" style='height: 100%; width: 100%; object-fit: cover' src="images/startups/<?php echo $id?>/1.jpg" alt="First slide">
                </div>
                <div class="carousel-item">
                <img class="d-block img-fluid"  style='height: 100%; width: 100%; object-fit: cover' src="images/startups/<?php echo $id?>/2.jpg" alt="Second slide">
                </div>
                <div class="carousel-item">
                <img class="d-block img-fluid"  style='height: 100%; width: 100%; object-fit: cover' src="images/startups/<?php echo $id?>/3.jpg" alt="Third slide">
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


            <div class="row ">
                
            

                <?php
                $id=(int)$_GET['find'];
                $sql = "SELECT itemID,name,description,price FROM items where id = '$id'";
        

                $results = mysqli_query($connection,$sql);
                while($rowitem = mysqli_fetch_array($results)) {


                ?>
                
                <div class="col-lg-4 col-md-6 mb-4 hvr-grow-shadow">
                    <div class="card h-100">
                        <a href="#"><img class="card-img-top  hvr-glow" src="images/startups/<?php echo $id."/items/".$rowitem['itemID'];?>.jpg" alt=""></a>
                    <div class="card-body hvr-float-shadow ">
                   
                        <h2 class="card-title lead">
                        <div class="bg-primary" style="margin-left:-20px;margin-right:-20px;padding-left:15px;color:white;">
                         <span class = "btn btn-lg "><?php echo $rowitem['name']?></span></div>
                         <div class="bg-warning" style="margin-left:-20px;margin-right:50%;padding-left:25px;color:black;">
                         <span class = "btn btn-sm">  <strong><?php echo $rowitem['price']."/- Rupees"?></strong></span></div>
                        
                        </h1>
                        <p class="card-text lead"><?php echo $rowitem['description']?></p>
                    </div>
                    <div class="btn btn-warning card-footer" style="color:blue;">
                    
<!--
                    <div style="display:none;" ><form  method="post" action="">
                            
                        <input  type="text" name="my"  value="<?php echo$rowitem['itemID'];?>">

                        <button id="button" data-toggle="modal" data-target="#myModal" type="submit" >Sign in</button>

                        
                        </form></div>-->
                        
                        <h5 class = " hvr-pulse"><a data-toggle="modal" data-target="#myModal<?php echo$rowitem['itemID'];?>" href="#">BUY</a></h5>
                        </div>
                    </div>
                </div>


                <div id='myModal<?php echo$rowitem['itemID'];?>' class="modal fade bd-example-modal-lg">



            <div class="modal-dialog modal-lg" role="document">
               <div class="modal-content">
                  <div>
                     <div class="card h-100">
                                <div class="row card-body" >
                                        
                                        
                                        <div class = "col-md-4 hovereffect">
                           <img class="img-fluid" src="images/startups/<?php echo $id."/items/".$rowitem['itemID'];?>.jpg" alt="">
                        
                        </div>
                        <div class="col-md-8">
                            <div class = "col-12">
                                
                              <h1 class="display-4 hvr-shadow">
                              <?php echo$rowitem['name'];?>
                              </h1>
                              
                             
                            </div>
                              <h5 class = "btn btn-danger" style="color:white;"><strong>by <?php echo $startupname;?></strong></h5>
                              <h5 class = "btn btn-warning" style="color:white;"><strong><?php echo $rowitem['price'];?> Rupees</strong></h5>
                              
                            </div>
                            <div class = "col">
                            <p class="card-text"><br><strong>Description: </strong><br><?php echo $rowitem['description'];?>
                                </p>
                                <!--
                                <p class="card-text"><br><strong>Other Details: </strong><br><?php echo $rowitem['description'];?>
                                </p>-->
                            </div>
                        </div>
                        <div class="btn btn-warning card-footer" style="color:blue;">
                        <form  method="post" action="myorders.php">
                            
                        <input style="display:none;" type="text" name="item"  value="<?php echo $rowitem['itemID'];?>">
                        <input style="display:none;" type="text" name="startup"  value="<?php echo $id;?>">
                        <input style="display:none;" type="text" name="cost"  value="<?php echo $rowitem['price'];?>">
          
                        
                        <button type="submit" style="background-color:Transparent; border-color:Transparent;"class = " hvr-pulse"><strong>BUY</strong></hbutton>

                        
                        </form>
                        
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
                <?php } ?>
                
                <?php } ?>
            </div>
            <!-- /.row -->
    
            </div>
            <!-- /.col-lg-9 -->
    
        </div>
        <!-- /.row -->
    
        </div>
        <!-- /.container -->


        <footer class = "footer py-5 bg-lite">
                <div class = "container">
                    <div class = "row">             
                        <div class = "col-5 col-sm-2">
                            <h5>Links</h5>
                            <ul class = "list-unstyled">
                                <li><a href="./home.php">Home</a></li>
                                <li><a href="./aboutus.html">About</a></li>
                                <li><a href="#">Menu</a></li>
                                <li><a href="./contactus.html">Contact</a></li>
                            </ul>
                        </div>
                        <div class = "col-6 col-sm-5">
                            <h5>Our Address</h5>
                            <address>
                                121, Clear Water Bay Road<br>
                                Clear Water Bay, Kowloon<br>
                                HONG KONG<br>
                                <i class = "fa fa-phone fa-lg"></i>: +852 1234 5678<br>
                                <i class = "fa fa-fax fa-lg"></i>: +852 8765 4321<br>
                                <i class = "fa fa-envelope fa-lg"></i>: <a href="mailto:confusion@food.net">confusion@food.net</a>
                            </address>
                        </div>
                        <div class = "col col-sm-4 align-self-center">
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
                            <p>© Copyright 2015 Ristorante Con Fusion</p>
                        </div>
                    </div>
                </div>
            </footer>


            <script src="node_modules/jquery/dist/jquery.min.js"></script>
            <script src="node_modules/tether/dist/js/tether.min.js"></script>
            <script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
            
       
          
      </body>
    
    </html>
    