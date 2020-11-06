<?php include("header.php"); ?>
<?php
    if(isset($_SESSION) && !empty($_SESSION['username'])){
        $user_name = $_SESSION['username'];
        $user_id  = $_SESSION['userid'];
        $qry = "SELECT * FROM payment WHERE customer_id = '$user_id'";
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
                    <!-- *** CUSTOMER MENU ***-->
                    <div class="panel panel-default sidebar-menu">
                        <div class="panel-heading">
                            <h3 class="panel-title">Customer section</h3>
                        </div>
                        <div class="panel-body">
                            <ul class="nav nav-pills nav-stacked">
                                <li >
                                    <a href="customer-account.php"><i class="fa fa-user"></i><?php echo $user_name; ?></a>
                                </li>
                                <li >
                                    <a href="customer-orders.php"><i class="fa fa-list"></i> Ordered list</a>
                                </li>
                                <li class="active">
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
                                        <th>Payment</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Quantity</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php while($row = $res->fetch_assoc()){ ?>
                                    <tr>
                                        <?php $payment_id = $row['payment_id']; ?>
                                        <th># <?php echo $payment_id; ?></th>
                                        <?php $payment_date = $row['date']; ?>
                                        <td><?php echo $payment_date; ?></td>
                                        <?php $payment_amount = $row['amount']; ?>
                                        <td>TK. <?php echo $payment_amount; ?></td>
                                        <?php $payment_quantity = $row['quantity']; ?>
                                        <td><?php echo $payment_quantity; ?></td>
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