<html>



<?php


class Tabla {
    private $filas;
    private $columnas;


    function __construct(){
     
    }

    function crearTabla($filas, $columnas){
        $this->filas = $filas;
        $this->columnas = $columnas;

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
$tabla = new Tabla();
echo $tabla->crearTabla(3,3);




?>
</html>