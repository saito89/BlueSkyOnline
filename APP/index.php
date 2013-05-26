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
        echo "empieza";
        $uAD = new userAD();
        echo "se creo la instancia de userAD";
        $uAD->usuarioSLogin('saito89','hola');
        echo "se ejecuto el metodo usuarioSLogin";
        phpinfo();
        ?>
    </body>
</html>
