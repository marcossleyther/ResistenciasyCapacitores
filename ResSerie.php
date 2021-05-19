
                    <?php
                    $suma =0;
                    //Valida que suceda la accion de Ir, de lo contrario la catidad de resistencias sera 2

                    if (isset($_REQUEST['btn'])) {
                        for ($i = 1; $i <= sizeof($_REQUEST['resistencias']); $i++) :
                            echo "R".$i.":  ". $_REQUEST['resistencias'][$i] . "<br>";
                            $suma +=$_REQUEST['resistencias'][$i] ;
                        
                        endfor;
                        echo "El resultado de las resistencias en serie es: " . $suma . " Ohmios";
                      
                    
                    } else {
                        echo 'Ingrese minimo dos resistencias, luego presione e [IR]';
                    }

                    //Si el numero de resistencias es menor que 2, no muestra los input
