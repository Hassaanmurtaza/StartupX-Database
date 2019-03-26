<!DOCTYPE html>

<?php

include("usersclass.php");

   if(isset($_SESSION['email'])){
    header("location:home.php");
   }
   

        if( isset($_GET['aim'])){
    if($_GET['aim']=="fail"){
        echo '<script language="javascript">';
        echo 'alert("Registeration failed. Please try again!")';
        echo '</script>';
    }
    
}
?>

<html lang="en">
    <head>
    <meta charset="utf-8">
    <title>StartupX Register</title>
    <link rel="icon" href="images/favicon-16x16.png">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css" />
    <link rel="stylesheet" href="css/login.css" />
    </head>
    <body>
        <!--hero section-->
        <section class="hero" style="background-color: rgba(244, 66, 66,0.5);">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 offset-md-3 col-sm-8 offset-sm-2 col-xs-12">
                        <div class="card border-none">
                            <div class="card-block">
                                <div class="mt-2 text-center">
                                    <h2>Create Your Account</h2>
                                </div>
                                
                                <div class="mt-4">
                                    <form action="myregister.php" method="post">
                                    <div class="form-group">
                                            <input type="text" class="form-control" name="name" required="required" value="" placeholder="Enter name">
                                        </div>
                                        <div class="form-group">
                                            <input type="email" class="form-control" name="email" required="required"  value="" placeholder="Enter email address">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control" name="pass" required="required"  value="" placeholder="Enter password">
                                        </div>
                                        
                                        <button type="submit" class="btn btn-primary btn-block">Create Account</button>
                                    </form>
                                    <div class="clearfix"></div>
                                    <p class="content-divider center mt-4"><span>or</span></p>
                                </div>
                                
                                <p class="text-center">
                                    Already have an account? <a href="login.php">Login Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                   
                </div>
            </div>
        </section>

    </body>
</html>
