<?php

include ("includes/Class.triangulo");
$rectangulo = new CTriangulo(NULL);
echo $rectangulo->get_form_transporte();
if (isset($_POST['guardar'])) {
    echo "El area del triangulo es: " . $rectangulo->area($_POST['largo'], $_POST['ancho']) ;
}

if (isset($_POST['boton'])) {
    echo "El perimetro del triangulo es: " . $rectangulo->perimetro($_POST['ladoA'], $_POST['ladoB'], $_POST['ladoC']) ;
}

?>

