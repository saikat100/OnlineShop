<?php include("header.php"); ?>

<?php 
    if(isset($_GET) && !empty($_GET['p_id'])){
        $p_id = $_GET['p_id'];
        if(isset($_SESSION) && !empty($_SESSION['cart'])){
            $cart = $_SESSION['cart'];
            $count = $_SESSION['count'];
            }
        $new_cart = array();
        $new_count=0;
        $flag = true;
        for($i=0;$i<$count;$i++){
            if($cart[$i]==$p_id && $flag){
                $flag = false;
                continue;
            }
            else{
                $new_cart[$new_count] = $cart[$i];
                $new_count++;
            }            
        }//End of for
        
        $_SESSION['cart'] = $new_cart;
        $_SESSION['count'] = $new_count;
                
    }



?>


<?php // submit the order
                    $confirmation_order = 0;
                    if(isset($_POST) && !empty($_POST['flag'])){
                                    $cart = array();
                                    $sum;
                                    if(isset($_SESSION) && !empty($_SESSION['cart'])){
                                        $cart = $_SESSION['cart'];
                                        $count = $_SESSION['count'];
                                        $sum = $_POST['sum'];
                                    }
                        
                                if(isset($count) && $count>0){
                                    
                                for($i=0;$i<$count;$i++){ 
                                    $p_id = $cart[$i];
                                    $qry = "SELECT * FROM product where product_id= '$p_id'";
                                    $res = $db_connect->query($qry) or die('Bad Query');
                                    $row = $res->fetch_assoc();
                                    $product_id = $row['product_id'];
                                    $price = $row['price'];
                                    $customer_id = $_SESSION['userid']; 
                                     $qry = "INSERT INTO `customer_order` (`order_id`, `customer_id`, `product_id`, `total_amount`) VALUES (NULL, '$customer_id', '$product_id', '$price')";
                                    $res = $db_connect->query($qry) or die ("Bad query");
                                    }//for loop
                                    
                                    /**** INSERTING INTO PAYMENT************/
                                    $qry = "INSERT INTO `payment` (`payment_id`, `customer_id`, `amount`, `date`, `quantity`) VALUES (NULL, '$customer_id', '$sum', NULL, '$count')";
                                    $res = $db_connect->query($qry) or die ("Bad query");
                                    $qry = "SELECT * FROM customer where customer_id= '$customer_id'";
                                    $res = $db_connect->query($qry) or die('Bad Query');
                                    $row = $res->fetch_assoc();
                                    $address= $row['address'];
                                    $confirmation_order =1;
                                    
                                }
                        unset($_SESSION['cart']);
                        $_SESSION['count']=0;
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
                        <li>Shopping cart</li>
                    </ul>
                </div>
                <div class="col-md-12" id="basket">
                    <div class="box">
                        <h1>Shopping cart</h1>
                        <?php  ?>
                        <?php if(isset($_SESSION) && !empty($_SESSION['count'])){ ?>
                            <p class="text-muted">You currently have 
                                <?php                                
                                    $count = $_SESSION['count'];
                                        echo $count;                                
                                ?> item(s) in your cart.</p>
                        <?php }
                        else if($confirmation_order){ ?>                            
                            <p style="color:green; font-size: 20px;">Your order is accepted. </p>  
                            <p style="color:green; font-size: 20px;"> You will get delivery within 24 hours in this address: <?php echo $address; ?></p>
                        <?php } 
                        else {?>
                        <p style="color: red;">SORRY, You have no item in your cart right now!</p>                        
                        <?php } ?>
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th colspan="2">Product</th>
                                            <!--th>Quantity</th-->
                                            <th>Unit price</th>
                                        </tr>
                                    </thead>        
                            <?php
                                $cart = array();
                                    if(isset($_SESSION) && !empty($_SESSION['cart'])){
                                        $cart = $_SESSION['cart'];                                
                                    $sum =0;                                    
                                if(isset($count) && !empty($count)){
                                    
                                for($i=0;$i<$count;$i++){ 
                                    
                                    //echo $cart[$i];
                                    
                                    $p_id = $cart[$i];
                                    
                                    $qry = "SELECT * FROM product where product_id= '$cart[$i]'";
                                    
                                    $res = $db_connect->query($qry) or die('Bad Query');
                                    
                                    $row = $res->fetch_assoc();
                                    $product_id = $row['product_id'];
                                    $product_name = $row['product_name'];
                                    $price = $row['price'];
                                    $sum = $sum + $price;
                                    $img = $row['img'];
                                    $image = "admin/".$img;
                            ?>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <a href="#">
                                                    <img src="<?php echo $image; ?>" alt="<?php echo $product_name; ?>">
                                                </a>
                                            </td>
                                            <td><a href="#"><?php echo $product_name; ?></a>
                                            </td>
                                            <td>TK.<?php echo $price; ?></td>
                                            <td><a href="basket.php?p_id=<?php echo $product_id; ?>"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                        </tr>                                       
                                    </tbody>      
                                <?php
                                    }
                                }                        
                                ?>
                                    <tfoot>
                                        <tr>
                                            <th colspan="2">Total</th>
                                            <th colspan="2">TK.<?php echo $sum; ?></th>
                                        </tr>
                                    </tfoot>
                                    <?php } ?>
                                </table>
                            </div>
                            <div class="box-footer">
                                <div class="pull-left">
                                    <a href="product.php" class="btn btn-default"><i class="fa fa-chevron-left"></i> Continue shopping</a>
                                </div>
                            <?php
                                if(isset($count) && !empty($count)){
                                ?>
                                <div class="pull-right">
                                    <form action="basket.php" method="post">
                                        <input type="hidden" name="flag" value="1">
                                        <input type="hidden" name="sum" value="<?php echo $sum; ?>">
                                        <input type="submit" name="order" value="Confirm Order " class="btn btn-primary" style="before:">
                                    </form>
                                </div>
                            <?php 
                                }
                            ?>
                    </div>
                </div>
            </div>
        </div>
<?php include("footer.php"); ?>