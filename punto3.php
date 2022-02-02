<?php
    $arreglo = [5, 1, 4, 2, 8, 7, 3, 6, 9, 11, 10];
    asort($arreglo);
    
    for($i = 0;$i < 10;$i++)
    {
    	echo $arreglo[$i]."<br>";
    }
    echo "<pre>";
    print_r($arreglo);
    echo "<pre>";
?>