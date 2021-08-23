<?php

$archivo = $_FILES['archivo'];
$nombre = $archivo['name'];
$tipo = $archivo['type'];
$tamano = $archivo['size'];

if ($tamano <= 10485760 ){
    if($tipo == "image/jpeg" || $tipo == "image/jpg" || $tipo == "image/png" || $tipo == "image/gif"){
        if(!is_dir('images')):
            mkdir('images',0777);
        endif;
    
        move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
        header("Refresh: 5; URL=index.php");
        echo "<h1>Imagen Subida Correctamente<h1>";
    }else{
        header("Refresh: 5; URL=index.php");
        echo "<h1>Ingrese la extensión correcta<h1>";
    }
}else{
    header("Refresh: 5; URL=index.php");
    echo "<h1>El archivo es muy grande para subirlo<h1>";
}





