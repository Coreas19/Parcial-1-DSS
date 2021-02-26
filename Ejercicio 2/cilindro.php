<?php

 $radio = $_GET['diam'];

       $altura = $_GET['altu'];

  
       $Pi = 3.1416;

       $area = (2*$Pi*$radio)*($radio+$altura);

       echo"<br/> &nbsp; El area del cilindro es de ". $area;
?>