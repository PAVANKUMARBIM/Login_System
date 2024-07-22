<!DOCTYPE html>
<html>
<head>
<meta chatset="UTF-8">
<title>Document</title>
<link rel="stylesheet" type ="text/css" href ="includes/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type ="text/css" href ="includes/bootstrap/css/style.css">
</head>
<body>
<h1>
    Asset Management System
</h1>
<div class ="container">
        <?php session_start(); ?>  
        <?php

            if(isset($_GET['message'])){
                echo "<h4>".$_GET['message']."</h4";
            }

        ?>  

    <form class="form" action="includes/login_process.php" method="post">
        
        <div class="form-group">    
            <label for="username"> User Name</label>
            <input type="text" name = "uname" class="form-control">
        </div>
    
    
        <div class="form-group">
            <label for="email"> Email</label>
            <input type="email" name = "email" class="form-control">
        </div>
    
        <div class="form-group">
            <input type="submit" name="login" value = "Login" class="btn btn-success">
        </div>
    
    
    
    
    </form>

    </div>
</body>


</html>