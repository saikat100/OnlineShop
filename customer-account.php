<?php include("header.php"); ?>
<?php 
    if(isset($_SESSION) && !empty($_SESSION['username'])){
        $user_name = $_SESSION['username'];
        $user_id  = $_SESSION['userid'];
        $qry = "SELECT * FROM customer WHERE customer_id = '$user_id'";
        $res = $db_connect->query($qry) or die ("Bad query on user info!");
        $row = $res->fetch_assoc();
        $user_email = $row['email'];
        $user_address = $row['address'];
        $user_phone = $row['phone_no'];
    }
    else{
        header("location:index.php");
    }
?>
<?php include("navbar.php"); ?>
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>My account</li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU ***-->
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="panel-title">Customer section</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li class="active">
                                    <a href="customer-account.php"><i class="fa fa-user"></i><?php echo $user_name; ?></a>
                                </li>
                                <li>
                                    <a href="customer-orders.php"><i class="fa fa-list"></i> Ordered list</a>
                                </li>
                                <li>
                                    <a href="customer-payments.php"><i class="fa fa-list"></i> Payment History</a>
                                </li>
                                <li>
                                    <a href="register.php?l_id=<?php echo $user_id; ?>"><i class="fa fa-sign-out"></i> Logout</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- *** CUSTOMER MENU END *** -->
                </div>
                <div class="col-md-9">
                    <div class="box">
                        <h1>My account</h1>
                        <h3>Personal Details:</h3>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <p style="font-size:18px; color: #4fbfa8;"><strong style="color:#555555;">Email:</strong> <?php echo $user_email; ?></p>                                        
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <p style="font-size:18px; color: #4fbfa8;"><strong style="color:#555555;">Phone No:</strong> <?php echo $user_phone; ?></p>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="form-group">
                                        <p style="font-size:18px; color: #4fbfa8;"><strong style="color:#555555;">Address:</strong> <?php echo $user_address; ?></p>
                                    </div>
                                </div>
                            </div>
                        <hr>                        
                    </div>
                </div>
            </div>
        </div>
<?php include("footer.php"); ?>