<?php
session_start();
if($_SESSION['flag'] ==1)
{
include("connect.php");
include("function.php");
//$names = var_dump(viewdata($con));
//echo $names;

$names_test = viewdata2($con); 
var_dump($names_test);

$names2 =viewdata($con); 
//$data2 = search_data($con,$names2) ;
//echo var_dump($names2);
}
?>
<?php
echo "<!DOCTYPE html>
<html>

    <head>

    </head>
    <body>
<div id = 'box'>
<form action ='search.php' method='post'>
    <input type = 'text' name='name' placeholder='search here...' id ='searchbox' 
    oninput = search(this.value)> <br>
</form>
 <ul id = 'dataview'> "?>
 <?php
  $count = 0 ;
  foreach ($names2  as $i){echo '<li>'; 
    echo $names2[$count][0];
    echo '</li>';$count++;}
    echo '</div></body></html>';
 
?>