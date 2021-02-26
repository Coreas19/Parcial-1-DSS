<!DOCTYPE html> 
<html lang="es"> 
<head>     
    <meta charset="utf-8">     
    <meta name="viewport" content="width=device-width, initial-scale=1.0">     
    <title>Promedio de nume</title> 
    
    <link rel="stylesheet" href="css/fonts.css">     
    <link rel="stylesheet" href="css/sticky-table.css"> 
</head> 
<body> 
    <section> 
        <article class="component"> 
            <table>     
                <thead>         
                    <th class="head">Numeros ingresadas</th>     
                </thead>     
                
                <tbody>     
                    <?php       
                        if(isset($_POST['enviar'])){           
                            if(isset($_POST['ingresados'])){               
                                calcularnumprom($_POST['ingresados']);           
                            }           
                            else{               
                                $msgerr = "No hay nume que procesar.";               
                                $nume = array($msgerr);               
                                calcularnumprom($nume);
                            }       
                        } 


                           //Obteniendo el numero mayor de la lista de numeros
                        function mayor($nume){
                            $mayor = $nume[0];
                            for($i=0; $i<count($nume); $i++){
                                $NumeroM = ($NumeroM >= $nume[$i]) ? $num : $nume[$i];
                            }
                            echo "\t<tr>\n";
                            echo "\t\t<td><center>Número mayor: </center></td>";
                            echo "\t\t<td><center>$NumeroM</center></td>";
                            echo "\t</tr>\n";
                        }
                        // Función para calcular el promedio de las nume       
                        function calcularnumprom($nume){           
                            $promnume = 0;           
                            $contador = 0;           
                            $celdas = "";           
                            if(is_array($nume)){               
                                foreach($nume as $num){                   
                                    $celdas .= "\n\t<tr>\n\t\t<td class=\"username\">\n\t\t\t$num\n\t\t</td>\n\t</tr>\n</tbody>\n"; 
                                    $promnume += $num;                   
                                    $contador++;               
                                }               
                                    $promnume /= $contador;               
                                    $promnume = number_format($promnume, 2, ".", ",");               
                                    $celdas .= "<tfoot>\n";               
                                    $celdas .= "<tr>\n\t\t<th>\n\t\t\tPorcentaje de valores ingresados es : $promnume\n\t\t</th>\n\t</tr>\n";
                                    $celdas .= "</tfoot>\n";               
                                    echo $celdas;           
                            }
                            else{               
                                $celdas .= "\n\t<tr>\n\t\t<td class=\"username\">\n\t\t\t$nume\n\t\t</td>\n\t</tr>\n</tbody>\n";
                                echo $celdas;           
                            }       
                        }     
                    ?> 
            </table> 
        </article>
        <!-- Librerías de jQuery para hacer el efecto stycky-headers --> 
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script> 
        <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.bathrottle-debounce.min.js"></script> 
        <script src="js/modernizr.custom.lis.js"></script> 
        <script src="js/jquery.stickyheader.js"></script> 
    </section> 
</body> 
</html> 