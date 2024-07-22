<!DOCTYPE html>
<html>
<head>
<meta chatset="UTF-8">
<title>Home</title>
<link rel="stylesheet" type ="text/css" href ="includes/bootstrap/css/bootstrap.css">
<link rel="stylesheet" type ="text/css" href ="includes/bootstrap/css/style.css">


</head>

<body>

<h1>
    Home

<?php session_start(); ?>
<?php

if(isset($_SESSION['uname'])){
    echo "<h2>Hello.........! ".$_SESSION['uname']."</h2>";
}
else{
    header('location:index.php?message= You need to login to enter the site');
}
?>

<a href="includes/logout_process.php" class="btn btn-danger">Logout</a>
</h1>




</body>






</html>