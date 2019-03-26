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
          <li class="nav-item  hvr-shadow">
            <a class="nav-link" href="./home.php">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
          <li class="nav-item active hvr-shadow">
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


    <div class = "container" style="margin:25px auto; width:90%">
        <div class = "row ">

           

            <div class = "col">
               <h3>About Us</h3>
               <hr>
            </div>
        </div>
        
        <div class = "row row-content">
            <div class = "col-12 col-sm-6">
                <h2>Our History</h2>
                <p>Started in 2010, Ristorante con Fusion quickly established itself as a culinary icon par excellence in Hong Kong. With its unique brand of world fusion cuisine that can be found nowhere else, it enjoys patronage from the A-list clientele in Hong Kong.  Featuring four of the best three-star Michelin chefs in the world, you never know what will arrive on your plate the next time you visit us.</p>
                <p>The restaurant traces its humble beginnings to <em>The Frying Pan</em>, a successful chain started by our CEO, Mr. Hassaan Murtaza, that featured for the first time the world's best cuisines in a pan.</p>
            </div>
           <div class = "col-12 col-sm-6">
                 
                <div class="card">
                    <h3 class="card-header bg-primary text-white">Facts At a Glance</h3>
                    <div class="card-block">
                        <dl class="row">
                            <dt class="col-6">Started</dt>
                            <dd class="col-6">3 Nov. 2017</dd>
                            <dt class="col-6">Major Stake Holder</dt>
                            <dd class="col-6">IBA</dd>
                            <dt class="col-6">Last Year's Turnover</dt>
                            <dd class="col-6">$1,250,375</dd>
                            <dt class="col-6">Employees</dt>
                            <dd class="col-6">3</dd>
                       </dl>
                    </div>
                </div>
            </div>

             <div class="col-12">
                <div class="card card-block bg-faded">
                    <blockquote class="blockquote">
                        <p class="mb-0">You better cut the pizza in four pieces because
                            I'm not hungry enough to eat six.</p>
                        <footer class="blockquote-footer">Yogi Berra,
                          <cite title="Source Title">The Wit and Wisdom of Yogi Berra,
                            P. Pepe, Diversion Books, 2014</cite>
                        </footer>
                    </blockquote>
                </div>
            </div>
        </div>


        <div class = "row row-content">
            <div class = "col-12">
                <h2>Corporate Leadership</h2>
               
                <ul class = "nav nav-tabs">
                    <li class = "nav-item">
                        <a class = "nav-link active" href=#rehan
                        role = "tab" data-toggle="tab">Hassaan Murtaza, CEO</a>
                    </li>

                    <li class = "nav-item">
                        <a class = "nav-link" href=#hassaan
                        role = "tab" data-toggle="tab">Rehan Ahmed, CFO</a>
                    </li>

                    <li class = "nav-item">
                        <a class = "nav-link" href=#azka
                        role = "tab" data-toggle="tab">Azka Farooqui, CTO</a>
                    </li>

                   
                </ul>
            -
                <div class = "tab-content">

                    <div role = "tabpanel" class = "tab-pane fade  show active" id = "rehan">
                            
                        
                            <h3><img class="rounded-circle img-responsive" style="width:100px" src="images/hassaan.jpg"> Hassaan Murtaza <small>Chief Entertainment Officer</small></h3>
                        <p class = "hidden-xs-down"> Our CEO, Hassaan, credits his hardworking East Asian immigrant parents who undertook the arduous journey to the shores of America with the intention of giving their children the best future. His mother's wizardy in the kitchen whipping up the tastiest dishes with whatever is available inexpensively at the supermarket, was his first inspiration to create the fusion cuisines for which <em>The Frying Pan</em> became well known. He brings his zeal for fusion cuisines to this restaurant, pioneering cross-cultural culinary connections.</p>
                    </div>

                    <div role = "tabpanel" class = "tab-pane fade  " id = "hassaan">
                        <h3><img class="rounded-circle img-responsive" style="width:100px" src="images/rehan.jpg"> Rehan Ahmed <small>Chief Food Officer</small></h3>
                        <p class="hidden-xs-down">Our CFO, Rehan, as he is affectionately referred to by his colleagues, comes from a long established family tradition in farming and produce. His experiences growing up on a farm in the Australian outback gave him great appreciation for varieties of food sources. As he puts it in his own words, <em>Everything that runs, wins, and everything that stays, pays!</em></p>
                    </div>
                     <div role = "tabpanel" class = "tab-pane fade  " id="azka">
                        <h3><img class="rounded-circle img-responsive" style="width:100px" src="images/azka.jpg"> Azka Farooqui <small>Chief Taste Officer</small></h3>
                        <p class="hidden-xs-down">Blessed with the most discerning gustatory sense, Azka, our CTO, personally ensures that every dish that we serve meets his exacting tastes. Our chefs dread the tongue lashing that ensues if their dish does not meet his exacting standards.</p>
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
    

    <!-- Bootstrap core JavaScript -->
    <script src="node_modules/jquery/dist/jquery.min.js"></script>
		<script src="node_modules/tether/dist/js/tether.min.js"></script>
		<script src="node_modules/bootstrap/dist/js/bootstrap.min.js"></script>
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    
      
  </body>

</html>
