<!DOCTYPE html>
<?php

include("usersclass.php");

   if(isset($_SESSION['email'])){
    header("location:home.php");
   }
   

        if( isset($_GET['aim'])){
    if($_GET['aim']=="fail"){
        echo '<script language="javascript">';
        echo 'alert("Login Failed. Incorrect username or password.")';
        echo '</script>';
    }
    elseif($_GET['aim']=="1"){
        echo '<script language="javascript">';
        echo 'alert("Account Created. Please Login!")';
        echo '</script>';
    }
    elseif($_GET['aim']=="2"){
        echo '<script language="javascript">';
        echo 'alert("You already have an account! Please login.")';
        echo '</script>';
    }
}


?>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>StartupX Login</title>
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
                                <div class="mt-2">
                                    <img src="images/user2.png" alt="Male" class="brand-logo mx-auto d-block img-fluid rounded-circle"/>
                                </div>
                                <p class="mt-4 text-white lead text-center">
                                    Sign in to access your account
                                </p>
                                <div class="mt-4">
                                    <form action="mylogin.php" method="post">
                                        <div class="form-group">
                                            <input type="email" name = "email"  required="required" class="form-control" id="email" value="" placeholder="Enter email address">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" name="pass"  required="required" class="form-control" id="password" value="" placeholder="Enter password">
                                        </div>
                                       
                                        <button type="submit" class="btn btn-primary" style="margin:auto; display:block;">Sign in</button>
                                    </form>
                                    
                                    <p class="content-divider center mt-4"><span>or</span></p>
                                </div>
                                
                                <p class="text-center">
                                    Don't have an account yet? <a href="register.php">Sign Up Now</a>
                                </p>
                            </div>
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </section>

    </body>
</html>
