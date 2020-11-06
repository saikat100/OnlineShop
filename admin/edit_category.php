<?php
    include('header.php');
?>

    
    <?php
        
        if(isset($_GET) && !empty($_GET['id'])){
        $category_id = $_GET['id'];
        //echo $category_id;

    ?>



    <?php 
            if($_POST!= NULL){
                $cat_name = $_POST['category_name'];
                $category_amount = $_POST['category_amount'];
                
                echo $cat_name;
                echo $category_amount;
                $qry = "UPDATE `category` SET `category_name` = '$cat_name', `total_amount` = '$category_amount'  WHERE `category`.`ID` = '$category_id'";
                
                $res = $db_connect->query($qry) or die ("Bad query");
                
                if($res){
                    header("location:category.php");
                    exit();
                }
            }


    ?>

    <div class="content">
        <div class="content_index">
        <form action="" method="post" >
        Category Name: <input type="text" name="category_name" value="">
            Total Amount: <input type="text" name="category_amount" value="">
            <input type="submit" value="submit"><br/>
        
        
        </form>
        <?PHP
        }//if the page is open for edit

            
        else{   
            
            //echo "Add category";
            
               if($_POST!= NULL){
                $cat_name = $_POST['category_name'];
                $category_amount = $_POST['category_amount'];
                
                echo $cat_name;
                echo $category_amount;
                $qry = "INSERT INTO category(ID,category_name,total_amount) values (NULL,'$cat_name', '$category_amount')";    
                
                $res = $db_connect->query($qry) or die ("Bad query");
                
                if($res){
                    header("location:category.php");
                    exit();
                }
            }
        ?>
        
        <div class ="content">
            <div class="content_index">

        <form action="" method="post" >
        Category Name: <input type="text" name="category_name" value="">
            Total Amount: <input type="text" name="category_amount" value="">
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