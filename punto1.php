<!DOCTYPE html>
<html lang="es">
    
    <head>
        <meta content="text/html; charset=UTF-8">
    </head>
    
    <body>
        <?php
            
           $arreglo = [9, 5, 3, 2, 1, 4, 8, 6, 7, 11, 10, 13, 12, 14, 15, 16, 18, 17];
           
           sort($arreglo);
           
           echo "<pre>";
           print_r($arreglo);
           echo "</pre>";
           
           echo "<pre>";
           var_dump($arreglo);
           echo "</pre>";
        ?>
    </body>
    
</html>