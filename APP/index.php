<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        include("../DA/userAD.php");
        include '../EN/usuarioEN.php';
        $uAD = new userAD();
        $uEN = $uAD->usuarioSLogin('saito89','hola');
        echo $uEN->getIdUsuario()."\n".$uEN->getUserName()."\n".$uEN->getPassword()."\n".$uEN->getTipo()."\n".$uEN->getNombre()."\n".$uEN->getFechaNacimiento()."\n".$uEN->getDescripcion();
        ?>
    </body>
</html>
