<?php 
include('dbcon.php');
session_start();
if(isset($_POST['login'])){
    $username = $_POST['uname'];
    $email = $_POST['email'];
 
    // SQL query needs correct table and column names, and should use prepared statements
    $query = "SELECT * FROM users WHERE user_name = ? AND email_id = ?";
    
    // Prepare statement
    $stmt = mysqli_prepare($con, $query);
    
    // Bind parameters
    mysqli_stmt_bind_param($stmt, 'ss', $username, $email);
    
    // Execute statement
    mysqli_stmt_execute($stmt);
    
    // Get result
    $result = mysqli_stmt_get_result($stmt);
    
    // Check if there's a match
    if(mysqli_num_rows($result) > 0)
    {

        $_SESSION['uname']=$username;
        header('location:../home.php');
        //echo "Login successful";
        // Process further as needed
    } else 
    {
        header('location:../index.php?message=Sorry Your User name or email ID invalis ');
        echo "Login failed";
        // Handle failed login attempt
    }
} else {
    echo "Form submission error";
    // Handle form submission error
}
?>