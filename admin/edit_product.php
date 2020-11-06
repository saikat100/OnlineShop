<?php
    include('header.php');
?>

    
    <?php
        
        if(isset($_GET) && !empty($_GET['id'])){
        $product_id = $_GET['id'];
        //echo $category_id;
            echo "Open for edit";

    ?>



    <?php 
            if($_POST!= NULL){
                $pro_name = $_POST['product_name'];
                $price = $_POST['price'];
                echo $pro_name;
                echo $price;
                $qry = "UPDATE `product` SET `product_name` = '$pro_name', `price` = '$price'  WHERE `product`.`product_id` = '$product_id'";
                
                $res = $db_connect->query($qry) or die ("Bad query");
                
                if($res){
                    header("location:product.php");
                    exit();
                }
            }


    ?>

    <div class="content">
        <div class="content_index">
        <form action="" method="post" >
            Product Name: <input type="text" name="product_name" value="">
            price: <input type="int" name="price" value="">
            <input type="submit" value="submit"><br/>
        
        
        </form>
        <!--form action="" method="post" >
        Category Name: <input type="text" name="category_name" value="">
            Total Amount: <input type="text" name="category_amount" value="">
            <input type="submit" value="submit"><br/>
        
        
        </form-->
        <?PHP
        }//if the page is open for edit

            
        else{   
            
            //echo "Add category";
            
               if($_POST!= NULL){
                $pro_name = $_POST['product_name'];
                $price = $_POST['price'];
                $model = $_POST['model'];
                $brand_id= $_POST['brand_id'];
                //$brand_name= $_POST['brand_name'];
                $category_id =$_POST['category_id'];
                $img = $_POST['img']; 
                $dsc = $_POST['description'];
                echo $pro_name;
                echo $price;
                $qry = "INSERT INTO product(product_id,product_name,price,model,brand_id,category_id,img,product_description) values (NULL,'$pro_name', '$price','$model', '$brand_id', '$category_id', '$img','$dsc' )";    
                
                $res = $db_connect->query($qry) or die ("Bad query");
                
                if($res){
                    header("location:product.php");
                    exit();
                }
            }
        ?>
        
        <div class ="content">
            <div class="content_index">

        <form action="" method="post" >
            Product Name: <input type="text" name="product_name" value="">
            price: <input type="int" name="price" value="">
            Model: <input type="int" name="model" value="">
            Brand Id: <input type="int" name="brand_id" value="">           
            Category Id: <input type="int" name="category_id" value="">
            img: <input type="int" name="img" value="">
            <textarea name="description" rows="4" cols ="50" >Description here...</textarea>
            <input type="submit" value="submit"><br/>
        
        
        </form>

            
        <?php            
        }// else this page is open for add new category
            ?>
            
        </div>
    </div>






















<?php
    include('footer.php');
?>