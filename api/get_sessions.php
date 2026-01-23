<?php 
include_once "db.php";

$movieId=$_GET['movieId'];
$date=strtotime($_GET['date']);

$today=strtotime(date("Y-m-d"));
$start=1;
if($date==$today){
    $H=date("G");
    //echo $H;
    if($H>=14){
        $start=ceil(($H-13)/2)+1;
    }
}


for($i=$start;$i<=5;$i++){
    echo "<option value='$i'>{$duration[$i]} 剩餘座位 20</option>";
}
