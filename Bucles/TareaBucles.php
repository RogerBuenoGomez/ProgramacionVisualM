<?php

// POR MEDIO DE UN BUCLE SACARME LOS NUMEROS IMPARES HASTA EL 60 


echo "<h1>TAREA</h1>";
echo "<h3>ESTOS SON LOS NUMEROS NUMEROS IMPARES HASTA EL 60: </h3>";

for ($i = 0; $i <= 60; $i++) {
   if ($i % 2 == 1) {
    // echo, print, print_r, var_dump 
    echo  " <h4> El " .$i. " es un valor impar </h4>";
    echo " ";

}
}

