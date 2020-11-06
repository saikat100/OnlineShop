<?php
    include('header.php');
    $delete = false;
?>



<div class="content">
    
    <!--a href="edit_customer.php" style="float: right;">Add Customer</a-->
    <?php
            
        
        
           if(isset($_GET) && !empty($_GET['id'])){
                $cus_id = $_GET['id'];
                $qry = "DELETE FROM customer where customer_id = '$cus_id'";
                
                $res = $db_connect->query($qry) or die("Bad query");
               //header("location:category.php");
            }
    

    
    ?>
    
    
    
    
    
    
    
    <?php
    
        $qry = "select * from customer";
        
        $res = $db_connect->query($qry) or die('Bad Query');
        
    ?>
    
    <table>
        <tr>
            <td>Customer ID</td>
            <td>Customer Name</td>
            <td>Email</td>
            <td>Phone</td>
            <td>Address</td>
            <td>Action</td>
        </tr>
        
        <?php
            while($row = $res->fetch_assoc()){
        
        ?>
        <tr>
            <td>
            <?php
                    echo $row["customer_id"];
                    $p_id = $row["customer_id"];
                    //echo $id;
            ?>
            </td>
            <td>
            <?php
                    echo $row["customer_name"];
            ?>
            </td>
            <td>
            <?php
                    echo $row["email"];
            ?>
            </td>
            <td>
            <?php
                    echo $row["phone_no"];
            ?>
            </td>
            <td>
            <?php
                    echo $row["address"];
            ?>
            </td>
            
            <!---td>
                <form action="edit_category.php" method="get" style = "width:20px;height:20px;margin:0px;padding:0px;">
                    <input style="background:none;margin:0px;padding:0px;width:20px; height:20px;" type="image" src = "icon/edit.png" alt="Edit" width="20" height="20" name = "id" value= "<?php $id ?>">
                
                </form>
            
            
            </td--->
            
            
            <td><!--a href ="edit_product.php?id= <?php echo $p_id; ?>" style="margin:0; padding: 0; border:none;background:none; float: left;"><img src = "icon/edit.png" alt="Edit" width="20" height="20"/></a--><a href ="customer.php?id= <?php echo $p_id; ?>" style="margin:0; padding: 0; border:none;background:none; float: right;"><img src = "icon/Delete_Icon.png" alt="Delete" width="20" height="20"/></a>
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