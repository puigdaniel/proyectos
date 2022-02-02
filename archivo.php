<?php
    
    function cargarArchivo()
    {
        $archi = fopen("archi.txt", "w");
        
        $arreglo = array(0 => 500, 1 => 404, 2 => 503, 3 => 522, 4 => 400, 5 => 300, 6 => 3, 7 => 900);
        
        sort($arreglo);
        
        for ($i = 0; $i < 7; $i++) 
        {
             echo $arreglo[$i] ."<br>";
        }
        
        while(!feof($archi) && fgets($archi, 262.144))
        {
            fread($archi, 4096);
            $archi++;
        }
        
        if($archi != NULL)
        {
            echo "Se ha abierto el fichero"."<br>";
        }
        else
        {
            echo "Error: el fichero no existe"."<br>";
        }
        
        fwrite($archi, "Esto es un archivo binario de texto creado con codigo PHP <br>");
        fflush($archi);
        fclose($archi);
        return false;
    }
    cargarArchivo();
?>