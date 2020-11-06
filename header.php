<?php session_start(); ?>

<?php 
    $home =0;
    $products =0;
    $categories = 0;
    $brands = 0;
    $about_us= 0;
?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="robots" content="all,follow">
    <meta name="googlebot" content="index,follow,snippet,archive">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Obaju e-commerce template">
    <meta name="author" content="Ondrej Svestka | ondrejsvestka.cz">
    <meta name="keywords" content="">
    <title>
        Online Shop
    </title>
    <meta name="keywords" content="">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100' rel='stylesheet' type='text/css'>

    <!-- styles -->
    <link href="css/font-awesome.css" rel="stylesheet">
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/animate.min.css" rel="stylesheet">
    <link href="css/owl.carousel.css" rel="stylesheet">
    <link href="css/owl.theme.css" rel="stylesheet">

    <!-- theme stylesheet -->
    <link href="css/style.default.css" rel="stylesheet" id="theme-stylesheet">

    <!-- your stylesheet with modifications -->
    <link href="css/custom.css" rel="stylesheet">
    <script src="js/respond.min.js"></script>
    <link rel="shortcut icon" href="favicon.png">
</head>
    
    
    <!---------------- Database connect--------------------->
    <?php        
            $user = "root";
            $pass = "";
            $db = "onlineshop";
            
            $db_connect = new mysqli('localhost',$user,$pass,$db);
            if($db_connect->connect_error){
                die("Connection failed: " .$db_connect->connect_error);
            }
    ?>     
    <!----------------End of Database connect--------------------->

<body>    
        <!-- *** TOPBAR ***-------------------->
    <div id="top">
        <div class="container">
            <div class="col-md-6 offer" data-animate="fadeInDown">
                <a href="#" class="btn btn-success btn-sm" data-animate-hover="shake">Offer of the day</a>  <a href="#">Get flat 35% off on orders over $50!</a>
            </div>
            <div class="col-md-6" data-animate="fadeInDown">
                <ul class="menu">                    
                    <!-------checking weather any user logged in or not------------->                    
                    <?php 
                        if(isset($_SESSION) && !empty($_SESSION['username'])){ 
                            $username = $_SESSION['username'];
                            ?>
                    <li><a href="customer-account.php"><?php echo $username; ?></a></li>
                    <li><a href="register.php?l_id=1">Logout</a>
                    </li>
                       <?php } else {                            
                            ?>
                            <li><a href="register.php">Login/Register</a>
                            </li>
                            
                    <?php
                        }
                    ?> 
                    
                    <li><a href="contact.php">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- *** TOP BAR END *** -->