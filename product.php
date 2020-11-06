<?php include("header.php"); ?>

<?php
    $products=1;
    include("navbar.php");
?>
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <div class="box">
                        <?php if(isset($_GET) && !empty($_GET['b_id'])){ //Gorup by brand, Comes from brand                                
                                $brand_id = $_GET['b_id'];
                                $qry = "SELECT * FROM brand WHERE brand_id='$brand_id'";        
                                $res = $db_connect->query($qry) or die('Bad Query');
                                $row = $res->fetch_assoc();                        
                        ?>
                        <h1>Product from <?php echo $row['brand_name'] ?></h1>                        
                        <?php }else if(isset($_GET) && !empty($_GET['c_id'])){ // Group by category, comes from category**************   
                          $category_id = $_GET['c_id'];
                                $qry = "SELECT * FROM category WHERE ID='$category_id'";        
                                $res = $db_connect->query($qry) or die('Bad Query');
                                $row = $res->fetch_assoc();                        
                        ?>
                        <h1><?php echo $row['category_name'] ?> Items</h1>
                         <?php }else{ // from navigation product option, show all product                        
                        ?>                        
                        <h1>All products</h1>                        
                        <?php } ?>
                    </div>
                    <div class="row products">                        
                        <!------ *************** show product if query from pruduct *******************--->
                        <?php 
                            if(isset($_GET) && !empty($_GET['b_id'])){ //Gorup by brand, Comes from brand                                
                                $brand_id = $_GET['b_id'];                        
                        ?>
                        <?php    
                            $qry = "SELECT * FROM product WHERE brand_id='$brand_id'";        
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
                        
                        <?php 
                            }
                            else if(isset($_GET) && !empty($_GET['c_id'])){ // Group by category, comes from category
                                $category_id = $_GET['c_id'];
                        
                        ?>
                        
                        
                        <?php    
                            $qry = "SELECT * FROM product WHERE category_id='$category_id'";        
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
                        <?php }else{ // from navigation product option, show all product
                        
                        ?>
                        <?php
                            $qry = "SELECT * from product";
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
                    
                    <?php } // else  ?>
                    <!------ *************** END  show product if query from pruduct *******************--->
                    </div>
                </div>
            </div>
        </div>
<?php include("footer.php"); ?>