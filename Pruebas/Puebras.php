<?php

if(isset($_GET['Num'])){
$Num = $_GET['Num'];
$i = 0;
while ($i < 13){
    echo $Num ." X ".$i. "=" . $Num * $i . "<br>";
    $i++;
    
}
}else {
    echo "<h1>Por favor, Ingrese un valor</h1> ";
    
}
