<?php
session_start();
include("connect.php");
include("function.php");
if($_SERVER['REQUEST_METHOD']=="POST") // when click post bitton in form 
{
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        // save to datebase  user table
        //$user_id = random_num(20);  
        $query = "insert into users (user_name,password) values ('$user_name','$password')";
        mysqli_query($con,$query);
        header("Location: login.php");
        die;
    }
    else 
    {
        echo "ادخل البيانات صحيحه";   
    }
}

?>
<!DOCTYPE html>
<html>

    <head>

    </head>
    <body>
<div id = "box">
<form method="post">
    <input type = "text" name="user_name"> <br>
    <input type = "password" name="password"> <br>

    <input type ="submit" value="signup"><br> 
    <a href="login.php">الدخول بمستخدم</a>

</form>
</div>
    </body>
</html>