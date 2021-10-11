<html>



<?php


class Numeros {
    private $mayor;
    private $menor;
    private $suma;
    private $media;
    private $numeros=[];


    function __construct(){


    }   

    function cargarNums(){
        $menor = 100;
        $mayor = 0;
        $suma = 0;
        for($i=0; $i<20; $i++){
            $numeros[$i] = rand(1, 100);
            if($numeros[$i]<$menor){
                $menor = $numeros[$i];
            }
            if($mayor<$numeros[$i]){
                $mayor = $numeros[$i];
            }
            $suma = $suma+$numeros[$i];
            number_format($suma, 2);

            echo $numeros[$i];
            echo "<br>";

        }
        $media = $suma/20;
        echo "<p style = color:blue> el menor número es: $menor </p>";
        echo "<p style = color:red> el mayor número es:  $mayor </p>";
        echo "<p> la media de los números es:  $media </p>";
        echo "<p>el total es:   $suma </p>";


    }
}

$n1 = new Numeros();
$n1 -> cargarNums();




?>
</html>