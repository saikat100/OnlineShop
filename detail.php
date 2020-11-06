<?php include("header.php"); ?>
<?php include("navbar.php"); ?>

    <div id="all">
                <?php 
                    /// Frtching product information fromm database
                        $addition_confirm=0;        
                        $product_id = $_GET['p_id'];
                        $qry = "SELECT * from product where product_id = $product_id ";
        
                        $res = $db_connect->query($qry) or die('Bad Query');
                        $row = $res->fetch_assoc();
                        $product_name = $row['product_name'];
                        $product_id = $row['product_id'];
                        $price = $row['price'];
                        $im = $row['img'];
                        $image = "admin/".$im;
                        $details =$row['product_description'];
                        $category_id = $row['category_id'];        
                ?>       
        
        <?php 
            ///Adding product to cart
                if(isset($_POST) && !empty($_POST['product_id'])){//// Adding the product to cart                    
                    if(isset($_SESSION) && !empty($_SESSION['cart'])){
                        $cart = $_SESSION['cart'];
                    }
                    $p_id = $_POST['product_id'];
                    $c = $_SESSION['count'];                    
                    $cart[$c]= $p_id;
                    $c++;
                    $_SESSION['cart'] = $cart;
                    $_SESSION['count']= $c;
                    $addition_confirm = 1;                    
                }        
        ?>

        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <ul class="breadcrumb">
                        <li><a href="#">Home</a>
                        </li>
                        <li><?php echo $product_name; ?></li>
                    </ul>
                </div>                                        
                <div class="col-md-12">
                    <div class="row" id="productMain">
                        <div class="col-sm-5">
                            <div id="mainImage">
                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                            </div>
                            <div class="ribbon sale">
                                <div class="theribbon">SALE</div>
                                <div class="ribbon-background"></div>
                            </div>
                            <div class="ribbon new">
                                <div class="theribbon">NEW</div>
                                <div class="ribbon-background"></div>
                            </div>
                        </div>
                        <div class="col-sm-7">
                            <div class="box">
                                <h1 class="text-center"><?php echo $product_name; ?></h1>                                
                                <p class="price">TK.<?php echo $price; ?></p>
                            <!-- Notify user that the product has been added to cart--->
                            <?php if($addition_confirm==1){ ?>    
                            <p style="color: green; margin-left:27%; font-size:20px;">Succesfully added to your cart.</p>    
                            <?php } ?>                                
                            <!--- for adding product to cart---->
                            <?php if(isset($_SESSION) && !empty($_SESSION['username'])){?>                                
                                <form action="" method="post">
                                    <div class="form-group" style="margin-left:234px;">
                                    </div>
                                    <input type="hidden" name="product_id" value="<?php echo $product_id; ?>">
                                    <button type="submit" class="btn btn-primary" style="margin-left:234px;">
                                        <p class="text-center buttons" >
                                            <i class="fa fa-shopping-cart"></i> Add to cart                                    
                                        </p>
                                    </button>
                                </form>                                
                            <?php } else { ?>                                
                                <p style="color:red; margin-left:100px;">You must be loggedin to add product in your cart or order.</p>         
                            <?php }?>
                            </div>
                        </div>
                    </div>
                    <div class="box" id="details">
                        <p>
                            <h4>Product details</h4>
                        <p><?php echo $details; ?></p>
                    </div>                
                    <div class="row same-height-row">
                        <div class="col-md-3 col-sm-6">
                            <div class="box" style="height: 474px;padding-top:200px;">
                                <h3>You may also like</h3>
                            </div>
                        </div>                        
                        
                            <?php    
                                $qry = "SELECT * from product where category_id = '$category_id' AND product_id <> '$product_id' limit 3 ";       
                                $res = $db_connect->query($qry) or die('Bad Query');    
                            while($row = $res->fetch_assoc()){
                                $product_id = $row['product_id'];
                                $name = $row['product_name'];
                                $price = $row['price'];
                                $im = $row['img'];
                                $image = "admin/".$im;
                            ?>
                            <div class="col-md-3 col-sm-4">
                                <div class="product">
                                    <div class="flip-container">
                                        <div class="flipper">
                                            <div class="front">
                                                <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                            <div class="back">
                                                <a href="detail.php?p_id=<?php echo $product_id; ?>">
                                                    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <a href="detail.php?p_id=<?php echo $product_id; ?>" class="invisible">
                                        <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                    </a>
                                    <div class="text">
                                        <h3><a href="detail.php?p_id=<?php echo $product_id; ?>"><?php echo $name; ?></a></h3>
                                        <p class="price">TK.<?php echo $price; ?></p>
                                    </div>
                                </div>
                            </div>
                        <?php
                            }/// end of while
                        ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<?php include("footer.php"); ?>