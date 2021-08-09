<?php
session_start();

echo "<h1>El valor de la sesión numero es: ". $_SESSION['a']. "</h1>" ;



echo "<a href='aumentar.php'>Aumentar</a><br>";
echo "<a href='disminuir.php'>Disminuir</a><br>";



