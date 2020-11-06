<?php   include("header.php"); ?>
<?php 
    if(isset($_GET) && !empty($_GET['l_id'])){
        session_destroy();
        header('location:register.php');
    }
?>
<?php 
    $register_msg = 0;
    $confirmation_registration=0;
?>

 <?php
    if(isset($_POST) && $_POST!= NULL){
        if($_POST['flag']==10){ ////////// for inserting customer information
            $customer_name = $_POST['customer_name'];
            $email = $_POST['email'];
            $qry = "SELECT * FROM registration WHERE email= '$email'";
            $check = $db_connect->query($qry) or die("Bad query in registration!");
            $temp_check = $check->fetch_assoc();
            if($temp_check){
                $confirmation_registration = 2;  
            }
            else{                
                $password = $_POST['password'];
                $phone = $_POST['phone'];
                $address = $_POST['address'];
                $qry = "INSERT INTO `customer` (`customer_id`, `customer_name`, `password`, `email`, `phone_no`, `address`) VALUES (NULL, '$customer_name', '$password', '$email', '$phone', '$address')";
                $res = $db_connect->query($qry) or die ("Bad query");
                $confirmation_registration = 1;                
            }
            
        }
        else if($_POST['flag']==11){//// for checking user login information
            $email = $_POST['email'];
            $password = $_POST['password'];
            $qry = "SELECT * FROM customer where customer.password = '$password' and customer.email='$email'";
            $res = $db_connect->query($qry) or die ("Bad query");
            $row = $res->fetch_assoc();
            if($row){
                $register_msg = 2;
                $logedin_name = $row['customer_name'];
                $_SESSION['username'] = $logedin_name;
                $_SESSION['userid'] = $row['customer_id'];
                $_SESSION['count'] =0;
                header("location:index.php");
            }
            else
            {
                $register_msg = 1;
            }
        }
    }
?>

<?php   include("navbar.php"); ?>
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li>New account / Sign in</li>
                    </ul>
                </div>                


                <div class="col-md-6">
                    <div class="box">
                        <h1>New account</h1>
                        <?php if($confirmation_registration==1){?>
                            <p style="color: green; font-size:20px;">Registration accomplished, Thank you.</p>
                        <?php
                            }
                            else if($confirmation_registration==2){
                        ?>
                            <p style="color: red; font-size:20px;">Email has been taken, try with other email!</p>  
                        <?php
                            }
                            else{
                        ?>
                            <p class="lead">Not our registered customer yet?</p>
                        <?php } ?>
                        <p>With registration with us new world of fashion, fantastic discounts and much more opens to you! The whole process will not take you more than a minute!</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                        <form action="register.php" method="post">
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="customer_name">
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email">
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                            <div class="form-group">
                                <label for="name">Phone no.</label>
                                <input type="text" class="form-control" id="phone" name="phone">
                            </div>
                            <input type="hidden" name="flag" value="10">
                            <div class="form-group">
                                <label for="name">Address</label>
                                <textarea type="text" class="form-control" id="address" name="address"></textarea>
                            </div>
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-user-md"></i> Register</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="box">
                        <h1>Login</h1>
                        <?php if($register_msg ==1){ ?>                        
                        <p style="color:red;">Incorrect Email or password!</p>                        
                         <?php   }else if($register_msg==2){ ?>
                        <p style="color: green;">Succesfully logedin.</p>
                        <p >Welcome <strong><?php echo $logedin_name; ?></p>
                        <?php }else{?>
                        <p class="lead">Already our customer?</p>
                        <p class="text-muted">Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Vestibulum tortor quam, feugiat vitae, ultricies eget, tempor sit amet, ante. Donec eu libero sit amet quam egestas semper. Aenean ultricies
                            mi vitae est. Mauris placerat eleifend leo.</p>
                        <?php }?>
                        <hr>

                        <form action="register.php" method="post">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" class="form-control" id="email" name="email" >
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name ="password" >
                            </div>
                            <input type="hidden" name="flag" value="11">
                            <div class="text-center">
                                <button type="submit" class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
<?php include("footer.php"); ?>