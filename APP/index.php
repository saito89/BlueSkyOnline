<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        echo 'estara entrando aqui <br>';
        include '../DA/userAD.php';
        echo "empieza <br>";
        $uAD = new userAD();
        echo "creo instancia de userAD <br>";
        $uEN = $uAD->usuarioSLogin('200808666','3908');
        echo "llamo metodo usuarioSLogin <br>";
        echo $uEN->getIdUsuario()."<br>".$uEN->getUserName()."<br>".$uEN->getPassword()."<br>".$uEN->getTipo()."<br>".$uEN->getNombre()."<br>".$uEN->getFechaNacimiento()."<br>".$uEN->getDescripcion()."<br>";
        ?>
    </body>
</html>
