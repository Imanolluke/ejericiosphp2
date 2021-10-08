<html>



<?php


class Tabla {
    private $filas;
    private $columnas;


    function __construct($filas, $columnas){
     
        $this->filas = $filas;
        $this->columnas = $columnas;
    }
    function crearTabla($filas, $columnas){


        echo "<table>";
        for($i=1; $i < $filas;$i++){
            echo  "<tr>";
            echo "aaaa ";
            for($j=1; $j < $columnas; $j++){
                echo "<td>";
                echo "aaaa ";
            }
            echo "</td>";
        }
        echo "</tr>";
    }   

}
$tabla = new Tabla(3,3);
echo $tabla->crearTabla(3,3);






?>
</html>