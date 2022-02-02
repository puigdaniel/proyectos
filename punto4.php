<?php
    function nuevoArreglo()
    {
        $arreglo = [4, 1, 2, 3, 5, 9, 7, 8, 0];
        asort($arreglo);
        
        for ($i = 0; $i < 9; $i++) 
        {
             echo $arreglo[$i]."<br>";
        }
        
        echo "<pre>";
        print_r($arreglo);
        echo "</pre>";
    }
    nuevoArreglo();
?>