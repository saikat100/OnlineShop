<?php
    include('header.php');
    $delete = false;
?>



<div class="content">
    
    <a href="edit_category.php" style="float: right;">Add Category</a>
    <?php
            
        
        
           if(isset($_GET) && !empty($_GET['id'])){
                $cat_id = $_GET['id'];
                $qry = "DELETE FROM category where ID = $cat_id";
                
                $res = $db_connect->query($qry) or die("Bad query");
               //header("location:category.php");
            }
    

    
    ?>
    
    
    
    
    
    
    
    <?php
    
        $qry = "select * from category";
        
        $res = $db_connect->query($qry) or die('Bad Query');
        
    ?>
    
    <table>
        <tr>
            <td>Categori Id</td>
            <td>Category Name</td>
            <td>Total Amount</td> 
            <td>Action</td>
        </tr>
        
        <?php
            while($row = $res->fetch_assoc()){
        
        ?>
        <tr>
            <td>
            <?php
                    echo $row["ID"];
                    $c_id = $row["ID"];
                    //echo $id;
            ?>
            </td>
            <td>
            <?php
                    echo $row["category_name"];
            ?>
            </td>
            <td>
            <?php
                    echo $row["total_amount"];
            ?>
            </td>
            
            <!---td>
                <form action="edit_category.php" method="get" style = "width:20px;height:20px;margin:0px;padding:0px;">
                    <input style="background:none;margin:0px;padding:0px;width:20px; height:20px;" type="image" src = "icon/edit.png" alt="Edit" width="20" height="20" name = "id" value= "<?php $id ?>">
                
                </form>
            
            
            </td--->
            
            
            <td><a href ="edit_category.php?id= <?php echo $c_id; ?>" style="margin:0; padding: 0; border:none;background:none; float: left;"><img src = "icon/edit.png" alt="Edit" width="20" height="20"/></a><a href ="category.php?id= <?php echo $c_id; ?>" style="margin:0; padding: 0; border:none;background:none; float: right;"><img src = "icon/Delete_Icon.png" alt="Delete" width="20" height="20"/></a>
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