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
        include '../LG/asignacionLG.php';
        
        $uLG = new userLG();
        $uEN = $uLG->usuarioSLogin('200808666','3908');
        echo $uEN->getIdUsuario()."<br>".$uEN->getUserName()."<br>".$uEN->getPassword()."<br>".$uEN->getTipo()."<br>".$uEN->getNombre()."<br>".$uEN->getFechaNacimiento()."<br>".$uEN->getDescripcion()."<br>";
                
        $cLG = new cursoLG();
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
        
        $aLG = new asignacionLG();
        $listAsignacion = $aLG->asignacionSInfo(1, 1);
        foreach($listAsignacion as $asignacion)
        {
            echo $asignacion->getIdAsignacion()." ";
            echo $asignacion->getNombre()." ";
            echo $asignacion->getDescripcion()." ";
            echo $asignacion->getFechaHoraAsignacion()." ";
            echo $asignacion->getMedioEntrega()." ";
            echo $asignacion->getTipo()." ";
            echo $asignacion->getPorcentaje()." ";
            echo $asignacion->getCalificacion()."<br>";
        }
        
        $as = new asignacionEN();
        $as->setNombre('Proyecto 2');
        $as->setDescripcion('Parser de un compilador');
        $as->setFechaHoraAsignacion('2013-06-30 23:59:59.0');
        $as->setMedioEntrega('email');
        $as->setTipo('grupal');
        $as->setPorcentaje(24);
        $as->setIdCurso(2);
        $aLG->asignacionI($as);
        echo "Se inserto la asignacion <br>";
        
        ?>
    </body>
</html>
