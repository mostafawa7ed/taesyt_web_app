    <?php
       session_start();
       echo $_SESSION['flag'];
        $dbhost = "localhost";
        $dbuser = "root";
        $dbpass = "";
        $dbname = "customs";
        $_SESSION['flag'] = 0;
        echo $_SESSION['flag'];
        if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
        {

            die("failed to connect to datebase");
        }
        $con -> close();



    ?>

<!DOCTYPE html>
<html>
    <head>

    </head>
    <body>

    <a href="login.php">الدخول</a>
    </body>
</html>


   