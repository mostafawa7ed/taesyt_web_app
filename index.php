<?php
session_start();
if($_SESSION['flag'] ==1)
{
include("connect.php");
include("function.php");
$user_login = check_login($con);
echo "<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>البداية</title>
</head>

<body>
<a href='logout.php'>خروج</a>
    <h1>شاشة البداية</h1>
    <br>
<div id = 'box'>
<form method='post'>
    <label>الاسم</label>
    <input type = 'text' name='name'> <br>
    <label>الرقم القومي</label>
    <input type = 'number' name='person_id'> <br>
    <label>الوظيفة</label>
    <input type = 'text' name='job'> <br>
    <label>العنوان</label>
    <input type = 'text' name='address'> <br>
    <label>عنوان الوطيقة</label>
    <input type = 'text' name='job_address'> <br>
    <label>رقم الهاتف</label>
    <input type = 'number' name='phone'> <br>
    <input type ='submit' value='add'><br> 
    <a href='login.php'>الدخول بمستخدم</a>
    <a href='cal.php'>حساب التقسيط </a>
    
</form>
</div>

</body>

</html>";
if($_SERVER['REQUEST_METHOD']=="POST") // when click post bitton in form 
{
    echo "test";
    $name = $_POST['name'];
    $person_id = $_POST['person_id'];
    $job = $_POST['job'];
    $address = $_POST['address'];
    $job_address = $_POST['job_address'];
    $phone = $_POST['phone'];
    if(!empty($name) && !empty($person_id)&&!empty($job)&&!empty($address)&&!empty($job_address)&&!empty($phone) )
    {
        // save to datebase  user table
        //$user_id = random_num(20);  
        $query = "insert into client (name,person_id,job,address,job_address,phone) 
        values ('$name','$person_id','$job','$address','$job_address','$phone')";
        mysqli_query($con,$query);
        echo "اخل adasdasdالبيانات صحيحه";
        die;
    }
    else 
    {
        echo "اخل البيانات صحيحه";   
        $ssss=is_numeric($phone);
        echo "'$name'+'$person_id'+'$job'+'$address'+'$job_address'+'$phone'+'$ssss'";
    }
}
}
else 
{
    echo "يجب تسجيل الدخول اولا";
}
?>

