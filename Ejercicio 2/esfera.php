<?php

if (isset($_REQUEST['radiocir'])) {
       $r = $_REQUEST['radiocir'];
     } else {
       $r = "";
}

$pi= 3.1416;


$areaesfera = 4 * $pi * pow($r,2);



echo "El área de la Esfera es: " . $areaesfera . " m2 <br>" ;


echo "<td><input type='submit' name='Submit' value='Eliminar'/></td> \n"; 


?>