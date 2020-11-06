<!DOCTYPE html>
<html>
    <head>
        <title>Admin panel</title>
        
        <link rel="stylesheet" type="text/css" href="css/style.css">
    
    </head>
    <body>
        
            <?php
            

        
            $user = "root";
            $pass = "";
            $db = "onlineshop";
            
            $db_connect = new mysqli('localhost',$user,$pass,$db);
            
            /**************
            if($db_connect->connect_error){
                die("Connection failed: " .$db_connect->connect_error);
            }
            else{
                echo "connection succesful ";
            }
            /*****************/
        ?>  
        
        <?php
                // Navigaiton bar is started form here....    
        
        ?>
        
        <div class= "main">
            <div class = "navigation">
                Admin Panel
            </div>
        
        
        