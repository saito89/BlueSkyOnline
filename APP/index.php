<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo 'estara entrando aqui \r\n';
        include '../DA/userAD.php';
        echo "empieza \r\n";
        $uAD = new userAD();
        echo "creo instancia de userAD \r\n";
        $uEN = $uAD->usuarioSLogin('saito89','hola');
        echo "llamo metodo usuarioSLogin \r\n";
        echo $uEN->getIdUsuario()."\r\n".$uEN->getUserName()."\r\n".$uEN->getPassword()."\r\n".$uEN->getTipo()."\r\n".$uEN->getNombre()."\r\n".$uEN->getFechaNacimiento()."\r\n".$uEN->getDescripcion();
        ?>
    </body>
</html>
