<?php 
function check_login($con) //for check if user have account
{
    if(isset($_SESSION['user_id']))
    {
        $id = $_SESSION['user_id'];
        $query = "select * from users  where user_id = '$id' limit 1";
        $resulte = mysqli_query($con , $query);
        if($resulte && mysqli_num_rows($resulte) > 0)
        {
            $user_date =mysqli_fetch_assoc($resulte);
            return $user_date ;
        }
    }
    header("Location: login.php");
    die;

}
/*function random_num($lenghth)
{
    $text = "";
    if($lenghth < 5)
    {
        $lenghth = 5;
    }
    $len = rand(4,$lenghth);
    for ($i=0; $i < $len; $i++)$len { 
        # code...
        $text .= rand(0,9) ;

    } 
    return $text;
}*/
 function viewdata($con)
{
    $query = "select name from client";
        $resulte = mysqli_query($con , $query);
        if($resulte && mysqli_num_rows($resulte) > 0)
        {
            $names =mysqli_fetch_all($resulte);
            //echo $names[5][0] . "////////////////////";
            //echo count($names) . "............";
            
            return $names ;
        }
}


function viewdata2($con)
{
    $query = "select name from client";
    $stmt = $con->prepare($query);
    $stmt->execute();
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}

/*function search_data($con,$names)
{
    $query = "select name from client where name like :name";
    //$resulte = mysqli_query($con , $query);
    $stmt = $con->prepare($query);
    $stmt->execute(['name'=> '%' . $names . '%']);
    $data = $stmt->fetchAll(PDO::FETCH_ASSOC);
    return $data;
}*/



















?>
