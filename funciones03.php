<?php
    
    function numero(){
        
        $decimal = 157;
        $resultado = decbin(157);
        echo $resultado. "<br>";
        
        $resultado = base_convert($resultado, 2, 8);
        
        echo $resultado."<br>";
        
        $octal = 235;
        $resultado = base_convert($octal, 8, 16);
        echo $resultado."<br>";
        return false;
    }
    numero();
?>