<?php

if (isset($_REQUEST['radiocir'])) {
       $r = $_REQUEST['radiocir'];
     } else {
       $r = "";
}
$areaesfera = 6 * pow($r,2);
echo "El área del cubo es: " . $areaesfera . " m2 <br>" ;
echo "<td><input type='submit' name='Submit' value='Eliminar'/></td> \n"; 
?>