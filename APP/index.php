<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        //jhgjhg
        //cambio
        include '../LG/userLG.php';
        $uLG = new userLG();
        $uEN = $uLG->usuarioSLogin('200808666','3908');
        echo $uEN->getIdUsuario()."<br>".$uEN->getUserName()."<br>".$uEN->getPassword()."<br>".$uEN->getTipo()."<br>".$uEN->getNombre()."<br>".$uEN->getFechaNacimiento()."<br>".$uEN->getDescripcion()."<br>";
        
        $cLG = new cursoLG();
        $listCurso = $cLG->cursoSInfo(1);
        for($i = 0; $i < count($listCurso); $i++)
        {
            echo $listCurso[$i]["idCurso"];
        }
        
        ?>
    </body>
</html>
