<?php
$arr = array('green'=>'зеленый', 'red'=>'красный','blue'=>'голубой');
$en=[];
$ru=[];
foreach ($arr as $key=>$value)
{array_push($en,$key);
array_push($ru,$value);}
echo "<pre>";
echo '</br>Английские названия:';
print_r ($en);
echo '</br>Русские названия:';
print_r ($ru);
echo "</pre>";
?>