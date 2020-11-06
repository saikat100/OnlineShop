<?php include("header.php");?>
<?php 
    $home =1;
    include("navbar.php");
?>
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <div id="main-slider">
                        <div class="item">
                            <img src="img/main-slider1.jpg" alt="" class="img-responsive">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/main-slider2.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/main-slider3.jpg" alt="">
                        </div>
                        <div class="item">
                            <img class="img-responsive" src="img/main-slider4.jpg" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div id="hot">
                <div class="box">
                    <div class="container">
                        <div class="col-md-12">
                            <h2>RECENT PRODUCT</h2>
                        </div>
                    </div>
                </div>                
        <!----------------***** Index product sarted from here---------------->
                
                <?php    
                    $qry = "SELECT * from product order by product_id desc limit 8";        
                    $res = $db_connect->query($qry) or die('Bad Query');         
                ?>

                <div class="container">
                    <div class="product-slider">
                        <?php $row = $res->fetch_assoc();/////**********   1                            
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            $price = $row['price'];
                            $im = $row['img'];
                            $image = "admin/".$im;
                        ?>
                        <div class="item">
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
                                    <h3><a href="detail.php?p_id=<?php echo $product_id; ?>"><?php echo $name; ?> </a></h3>
                                    <p class="price">TK.<?php echo $price; ?></p>
                                </div>
                            </div>
                        </div>
                        <?php $row = $res->fetch_assoc();/////**********   2
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            $price = $row['price'];
                            $im = $row['img'];
                            $image = "admin/".$im;
                        ?>

                        <div class="item">
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
                                    <p class="price"><!--del>TK. <?php echo $price-5000; ?></del--> TK.<?php echo $price; ?></p>
                                </div>
                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                            </div>
                        </div>                        
                        <?php $row = $res->fetch_assoc();/////**********   3
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            $price = $row['price'];
                            $im = $row['img'];
                            $image = "admin/".$im;
                        ?>

                        <div class="item">
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
                        <?php $row = $res->fetch_assoc();/////**********   4
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            $price = $row['price'];
                            $im = $row['img'];
                            $image = "admin/".$im;
                        ?>

                        <div class="item">
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
                        
                        <?php $row = $res->fetch_assoc();/////**********   5
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            $price = $row['price'];
                            $im = $row['img'];
                            $image = "admin/".$im;
                        ?>

                        <div class="item">
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
                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                            </div>
                        </div>                        
                        <?php $row = $res->fetch_assoc();/////**********   6
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            $price = $row['price'];
                            $im = $row['img'];
                            $image = "admin/".$im;
                        ?>
                        <div class="item">
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
                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                            </div>
                        </div>                        
                        <?php $row = $res->fetch_assoc();/////**********   7
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            $price = $row['price'];
                            $im = $row['img'];
                            $image = "admin/".$im;
                        ?>

                        <div class="item">
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
                                <div class="ribbon sale">
                                    <div class="theribbon">SALE</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <div class="ribbon new">
                                    <div class="theribbon">NEW</div>
                                    <div class="ribbon-background"></div>
                                </div>
                                <div class="ribbon gift">
                                    <div class="theribbon">GIFT</div>
                                    <div class="ribbon-background"></div>
                                </div>
                            </div>
                        </div>
                        
                        <?php $row = $res->fetch_assoc();/////**********   8
                          
                            $product_id = $row['product_id'];
                            $name = $row['product_name'];
                            $price = $row['price'];
                            $im = $row['img'];
                            $image = "admin/".$im;
                        ?>

                        <div class="item">
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
                    </div>
                </div>
            </div>
                </div>
            </div>
        </div>
<?php include("footer.php"); ?>