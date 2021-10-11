<html>



<?php

$str = "manzana pera limon sandia melon";

$frutas = explode(" ", $str);


foreach ($frutas as $value => $key) {
    $value = strlen($key);
    echo $key . " = ". $value;
    echo "<br>";

}


?>  
</html>