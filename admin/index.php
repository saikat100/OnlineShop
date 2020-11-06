<?php

    include('header.php');

    
?>
     <div class="content">
         <div class ="content_index">
  
        <?php
	   // Query
            $flag = false;
            
            if($_POST!= NULL ){
            
            $name = $_POST['name'];
            $password = $_POST['password']; 
            $qry = "SELECT * FROM  user where user.name = '$name' AND user.password = '$password' ";
                
            $res = $db_connect->query($qry) or die('Bad Query');
                if($res->num_rows>0){
                    echo "Successfully loged in.";
                    $flag = true;
                }
                else{  
                    echo "Username or password incorrect!";
                    header("location:index.php");
                }
                
            }   

            
            

	       if($flag){
               
               header("location:dashboard.php");
               exit(1);

        ?>

        <!--- after successfully login></---->



            <?php
                }else{  
                    //login unsuccesfull

            ?>
            <form  method = "POST" >
                Name: <input type="text" value="" name="name" ><br/>
            Password: <input type="password" value="" name="password" ><br/>
            <input type="submit" value="login"><br/>

            </form>
            <?php		

                }
            ?>
            </div>
         </div> 
        
       <?php

            include('footer.php');

        ?>
        
        
        
