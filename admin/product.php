<?php
    include('header.php');
    $delete = false;
?>



<div class="content">
    
    <a href="edit_product.php" style="float: right;">Add Product</a>
    <?php
            
        
        
           if(isset($_GET) && !empty($_GET['id'])){
                $pro_id = $_GET['id'];
                $qry = "DELETE FROM product where product_id = '$pro_id'";
                
                $res = $db_connect->query($qry) or die("Bad query");
               //header("location:category.php");
            }
    

    
    ?>
    
    
    
    
    
    
    
    <?php
    
        $qry = "select * from product";
        
        $res = $db_connect->query($qry) or die('Bad Query');
        
    ?>
    
    <table>
        <tr>
            <td>Product Id</td>
            <td>Product Name</td>
            <td>Price</td>
            <td>Model</td>
            <td>Brand ID</td>
            <td>Category Id</td>
            <td>Image</td>
            <td>Action</td>
        </tr>
        
        <?php
            while($row = $res->fetch_assoc()){
        
        ?>
        <tr>
            <td>
            <?php
                    echo $row["product_id"];
                    $p_id = $row["product_id"];
                    //echo $id;
            ?>
            </td>
            <td>
            <?php
                    echo $row["product_name"];
            ?>
            </td>
            <td>
            <?php
                    echo $row["price"];
            ?>
            </td>
            <td>
            <?php
                    echo $row["model"];
            ?>
            </td>
            <td>
            <?php
                    echo $row["brand_id"];
            ?>
            </td>

            <td>
            <?php
                    echo $row["category_id"];
            ?>
            </td>

            <td>
                <img src= " <?php echo $row["img"]; ?>" style =" height:20px; width:30px;">
           
                </img>
            </td>
    
            
            <!---td>
                <form action="edit_category.php" method="get" style = "width:20px;height:20px;margin:0px;padding:0px;">
                    <input style="background:none;margin:0px;padding:0px;width:20px; height:20px;" type="image" src = "icon/edit.png" alt="Edit" width="20" height="20" name = "id" value= "<?php $id ?>">
                
                </form>
            
            
            </td--->
            
            
            <td><a href ="edit_product.php?id= <?php echo $p_id; ?>" style="margin:0; padding: 0; border:none;background:none; float: left;"><img src = "icon/edit.png" alt="Edit" width="20" height="20"/></a><a href ="product.php?id= <?php echo $p_id; ?>" style="margin:0; padding: 0; border:none;background:none; float: right;"><img src = "icon/Delete_Icon.png" alt="Delete" width="20" height="20"/></a>
            </td>

            
        <?php
        
        ?>
        </tr>
        
        
        <?php } ?>
    
    
    </table>




</div>








<?php
    include('footer.php');
?>