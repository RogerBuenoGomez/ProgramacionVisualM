
<html>
    <head>
        <title>PRESENTACION FORMULARIO</title>

    </head>
    <body>
        <div>
            <h1>Juegos</h1>
            <form name="juegos" action=""method="POST">

                <?php
                $S['juegos'] ['$ACCION'] = ['GTA', 'COD', 'PUGB'];
                $S['juegos'] ['AVENTURA'] = ['ASSASINS', 'CRASH', 'Prince of Persia'];
                $S['juegos'] ['DEPORTES'] = ['FIFA 19', 'PES 19', 'MOTO GP 19'];

                $Keys = array_KeyS($S['juegos']);
                $Table = '<table border ="1">';
                $Table .= '<tr>';
                foreach ($Keys as $numeros) {
                    $Table .= '<th>' . $numeros . '</th>';
                }

                $Table .= '</tr>';
// Uso de includes para poder llamar las clases 
                include 'include/primero.php';
                include 'include/segundo.php';
                include 'include/tercera.php';


                $Table .= '</tables>';
                echo $Table;
                ?>

            </form>
        </div>
    </body>
</html>


