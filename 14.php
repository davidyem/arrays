<?php
$array = array( 4, 2, 5, 19, 13, 0, 10);
$e=[2,3,4];
$is=False;
foreach ($array as $i)
{
    if (in_array($i,$e)){
        $is=True;
        break;
    }
}
if ($is){
 echo "Есть!";
    }
else {
echo "Нет!";
}
?>