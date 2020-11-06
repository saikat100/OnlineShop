<?php include("header.php"); ?>
<?php
    if(isset($_SESSION) && !empty($_SESSION['username'])){
        $user_name = $_SESSION['username'];
        $user_id  = $_SESSION['userid'];
        $qry = "SELECT * FROM customer_order WHERE customer_id = '$user_id'";
        $res = $db_connect->query($qry) or die ("Bad query on user info!");
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
                        <li>My orders</li>
                    </ul>
                </div>                
                <div class="col-md-3">
                    <!-- *** CUSTOMER MENU *****-->
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="panel-title">Customer section</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li >
                                    <a href="customer-account.php"><i class="fa fa-user"></i><?php echo $user_name; ?></a>
                                </li>
                                <li class="active">
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
                <div class="col-md-9" id="customer-orders">
                    <div class="box">
                        <h1>My orders</h1>
                        <p class="lead">Your orders on one place.</p>
                        <p class="text-muted">If you have any questions, please feel free to <a href="contact.html">contact us</a>, our customer service center is working for you 24/7.</p>

                        <hr>

                        <div class="table-responsive">
                            <table class="table table-hover">
                                <thead>
                                    <tr>
                                        <th>Order</th>
                                        <th>Date</th>
                                        <th>Total</th>
                                        <th>Product Name</th>
                                        <th>img</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row = $res->fetch_assoc()){ ?>
                                    <tr>
                                        <?php $order_id = $row['order_id']; ?>
                                        <th># <?php echo $order_id; ?></th>
                                        <?php $order_date = $row['date']; ?>
                                        <td><?php echo $order_date; ?></td>
                                        <?php $order_amount = $row['total_amount']; ?>
                                        <td>TK. <?php echo $order_amount; ?></td>
                                        <?php 
                                            $product_id = $row['product_id'];
                                            $qry2 = "SELECT * FROM product WHERE product_id= '$product_id'";
                                            $res2 = $db_connect->query($qry2) or die ("bad query on Product");
                                            $row2 = $res2->fetch_assoc();
                                            $product_name = $row2['product_name'];
                                            $img = $row2['img'];
                                            $product_img = "admin/".$img;    
                                        ?>
                                        <td><?php echo $product_name; ?></td>
                                        <td><a href="detail.php?p_id=<?php echo $product_id; ?>" ><img src="<?php echo $product_img; ?>" style="height: 50px;"></a>
                                        </td>
                                    </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include("footer.php"); ?>