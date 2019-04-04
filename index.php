<?php
require_once 'Godzilla.php';
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Hola OOP PHP</title>
    </head>
    <body>
        <?php
            $Monstruo = new Godzilla("Gojira", false, "Hollywood", "Rayos de Plasma");
            echo "Nombre: ".$Monstruo->strNombre."<br>";
            if($Monstruo->getAtaca()){
                echo $Monstruo->Ataca()."<br>";    
            }else{
                echo "Esta dormido<br>";
            }
            echo "Su debilidad: ".$Monstruo->getDebilidad()."<br>";
            var_dump($Monstruo);
        ?>
    </body>
</html>
