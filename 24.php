<?php
$number=442158755745;
$kol=5;
$sum=0;
for ($i=0;$i<strlen((string)$number);$i++)
{
    $numberStr = (string)$number;
    $numbToCheck=$numberStr[$i];
    if ($numbToCheck==$kol) 
	{$sum++;}
}
echo "Цифра $kol встречается в числе $number - $sum раза";
?>