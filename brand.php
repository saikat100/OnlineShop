<?php include("header.php"); ?>
<?php
    $brands =1;
    include("navbar.php");
?>
    <div id="all">
        <div id="content">
            <div class="container">
                <div class="col-md-12">
                    <div class="box">
                        <h1>Brands</h1>
                    </div>
                    <?php    
                        $qry = "SELECT * from brand";        
                        $res = $db_connect->query($qry) or die('Bad Query');         
                    ?>
                    <div class="row products">                        
                        <?php 
                            while($row = $res->fetch_assoc()){                            
                                $brand_id = $row['brand_id'];   /////**********   1
                                $name = $row['brand_name'];
                                $im = $row['logo'];
                                $image = "admin/".$im;
                        ?>
                        <div class="col-md-3 col-sm-4">
                            <div class="product">
                                <div class="flip-container">
                                    <div class="flipper">
                                        <div class="front">
                                            <a href="product.php?b_id=<?php echo $brand_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                        <div class="back">
                                            <a href="product.php?b_id=<?php echo $brand_id; ?>">
                                                <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <a href="product.php?b_id=<?php echo $brand_id; ?>" class="invisible">
                                    <img src="<?php echo $image; ?>" alt="" class="img-responsive">
                                </a>
                            </div>
                        </div>                        
                    <?php
                        }/// end of while
                    ?>
                    </div>
                </div>
            </div>
        </div>
<?php include("footer.php"); ?>