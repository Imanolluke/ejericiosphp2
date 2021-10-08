<html>

<?php

$nums=[1,2,3,4,5,6,7,8,9,10];
$factorial =[];
$result = 1;


 for($j = 0; $j < sizeof($nums); $j++){
     $result = 1;
    for ($x=1; $x <= $nums[$j]; $x++) { 
        $result = $result * $x;
    }
    $factorial[$j]= $result;
    echo $nums[$j]. "=".  $factorial[$j];
    echo "<br>";
 }




  



   




?>

</html>