

    <div class="navbar navbar-default yamm" role="navigation" id="navbar">
        <div class="container">
            <!--/.navbar-header -->
            <div class="navbar-collapse collapse" id="navigation">
                <ul class="nav navbar-nav navbar-left">
                    <?php if($home){ ?>
                    <li class = "active">
                        <a href="index.php" >Home</a>
                    </li>
                    <?php } else{ ?>
                    <li class = "yamm-fw">
                        <a href="index.php" >Home</a>
                    </li>                   
                    <?php } ?>

                    <?php if($products){ ?>
                    <li class = "active">
                        <a href="product.php" >Products</a>
                    </li>
                    <?php } else{ ?>
                    <li class = "yamm-fw">
                        <a href="product.php" >Products</a>
                    </li>                   
                    <?php } ?>
                    
                    <?php if($categories){ ?>
                    <li class = "active">
                        <a href="category.php" >Categories</a>
                    </li>
                    <?php } else{ ?>
                    <li class = "yamm-fw">
                        <a href="category.php" >Categories</a>
                    </li>                   
                    <?php } ?>
                    
                    <?php if($brands){ ?>
                    <li class = "active">
                        <a href="brand.php" >Brands</a>
                    </li>
                    <?php } else{ ?>
                    <li class = "yamm-fw">
                        <a href="brand.php" >Brands</a>
                    </li>                   
                    <?php } ?>                    
                    <?php if($about_us){ ?>
                    <li class = "active">
                        <a href="about_us.php" >About us</a>
                    </li>
                    <?php } else{ ?>
                    <li class = "yamm-fw">
                        <a href="about_us.php" >About us</a>
                    </li>                   
                    <?php } ?>
                </ul>
            </div>
            <div class="navbar-buttons">
                <div class="navbar-collapse collapse right" id="basket-overview">                    
                    <?php 
                        if(isset($_SESSION) && !empty($_SESSION['username'])){ 
                            $username = $_SESSION['username'];
                            ?>                      
                    <a href="basket.php" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span class="hidden-sm">items in cart</span></a>
                    
                     <?php } ?>
                </div>
            </div>
        </div>
    </div>