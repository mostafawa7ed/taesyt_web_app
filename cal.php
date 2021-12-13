<?php
session_start();
include("connect.php");
include("function.php");

?>

<!DOCTYPE html>
<head>

</head>
<body>

    <label>السعر الاصلي</label>
    <input type = "number" name="real_price" id="real_price"> <br>
    <label>النسبة</label>
    <input type = "number" name="nspa" id="nspa"> <br>
    <label>عدد الشهور</label>
    <input type = "number" name="months"id ="months"> <br>
    
    
    <button type="button" onclick="calculte_fun();">حساب السعر</button><br>

    <label>الدفع للشهر</label>
    <input type = "number" name="price_after" id="price_month"> <br>

    <label>السعر بعد</label>
    <input type = "number" name="price_after" id="price_after"> <br>



    <script src="calculte.js"></script>
</body>
</html>