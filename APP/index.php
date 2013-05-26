<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo 'estara entrando aqui';
        include '../DA/userAD.php';
        include '../EN/usuarioEN.php';
        echo "empieza \n";
        $uAD = new userAD();
        echo "creo instancia de userAD \n";
        $uEN = $uAD->usuarioSLogin('saito89','hola');
        echo "llamo metodo usuarioSLogin \n";
        echo $uEN->getIdUsuario()."\n".$uEN->getUserName()."\n".$uEN->getPassword()."\n".$uEN->getTipo()."\n".$uEN->getNombre()."\n".$uEN->getFechaNacimiento()."\n".$uEN->getDescripcion();
        ?>
    </body>
</html>
