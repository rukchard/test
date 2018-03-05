<?php

include('config.php');

$result = mysql_query ("SELECT * FROM sensor_data ORDER BY timeStamp DESC",$link) or die("ไม่สามารถเลือกฐานข้อมูลได้");

$row = mysql_fetch_array($result);
    
echo $row["timeStamp"];
    
?>

