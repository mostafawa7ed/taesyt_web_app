<?php
session_start();
include("connect.php");
include("function.php");
if($_SERVER['REQUEST_METHOD']=="POST") // when click post bitton in form 
{

    $_SESSION['flag'] = 0;
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $_SESSION['authentcation_user'] = $user_name;
    $_SESSION['authentcation_pass'] = $password;
    if(!empty($user_name) && !empty($password) && !is_numeric($user_name))
    {
        // read from datebase  user table
        //$user_id = random_num(20);  
        $query = "select * from users where user_name = '$user_name'and password ='$password' limit 1";
        $resulte = mysqli_query($con,$query);
        if ($resulte)
        {
                if($resulte && mysqli_num_rows($resulte) > 0)
            {
                $user_data =mysqli_fetch_assoc($resulte);
                if($user_data['password'] === $password)
                {
                    $_SESSION['flag'] = 1;
                    $_SESSION['user_id'] = $user_data['user_id'];
                    header("Location: index.php");
                    die;
                }

            }
        }
        header("Location: index.php");
        die;
    }
    else 
    {
        echo "اخل البيانات صحيحه";   
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

    <input type ="submit" value="login"><br> 
    <a href="signup.php">تسجيل مستخدم جديد</a>

</form>
</div>
    </body>
</html>