<?php
$days=['понедельник','вторник','среда','четверг','пятница','суббота','воскресенье'];
$weekend=['суббота','воскресенье'];
foreach ($days as $d)
{
    if (in_array($d,$weekend))
    {
        echo "<b> $d </b></br>";
    }
    else
    {
        echo "$d </br>";
    }
?>