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
        include '../LG/cursoLG.php';
        $uLG = new userLG();
        $uEN = $uLG->usuarioSLogin('200808666','3908');
        echo $uEN->getIdUsuario()."<br>".$uEN->getUserName()."<br>".$uEN->getPassword()."<br>".$uEN->getTipo()."<br>".$uEN->getNombre()."<br>".$uEN->getFechaNacimiento()."<br>".$uEN->getDescripcion()."<br>";
        
        
        $cLG = new cursoLG();
        echo "instancia cursoLG <br>";
        $listCurso = $cLG->cursoSInfo(1);
        foreach($listCurso as $curso)
        {
            echo $curso->getIdCurso()." ";
            echo $curso->getNombre()." ";
            echo $curso->getSigla()." ";
            echo $curso->getHorario()." ";
            echo $curso->getCreditos()." ";
            echo $curso->getCalificacion()."<br>";
            
        }
        
        ?>
    </body>
</html>
