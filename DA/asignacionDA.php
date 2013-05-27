<?php
include '../EN/asignacionEN.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class asignacionDA
{
    function asignacionSInfo($_idUsuario, $_idAsignacion)
    {
        try
        {
            $connection = new mySqlConnection();
            $db = $connection->openMySqlDB('190.7.192.3','espe','T3cn0l0gic0.2013','bluesky');
            $res = mysqli_query($db, "call asignacionSInfo('$_idUsuario','$_idAsignacion')");
            $connection->closeMySqlDB();
            $listAsignacion = array();
            while($as = mysqli_fetch_array($res))
            {
                $aEN = new asignacionEN();
                $aEN->setIdAsignacion($as['idAsignacion']);
                $aEN->setNombre($as['nombre']);
                $aEN->setDescripcion($as['descripcion']);
                $aEN->setFechaHoraAsignacion($as['fechaHoraAsignacion']);
                $aEN->setMedioEntrega($as['medioEntrega']);
                $aEN->setTipo($as['tipo']);
                $aEN->setPorcentaje($as['porcentaje']);
                $aEN->setCalificacion($as['calificacion']);
                array_push($listAsignacion, $aEN);
            }
            return $listAsignacion;
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }    
    function asignacionI($_asignacion)
    {
        try
        {
            $connection = new mySqlConnection();
            $db = $connection->openMySqlDB('190.7.192.3','espe','T3cn0l0gic0.2013','bluesky');
            echo $_asignacion->getNombre()." ";
            echo $_asignacion->getDescripcion()." ";
            echo $_asignacion->getFechaHoraAsignacion()." ";
            echo $_asignacion->getMedioEntrega()." ";
            echo $_asignacion->getTipo()." ";
            echo $_asignacion->getPorcentaje()." ";
            echo $_asignacion->getIdCurso()."<br>";
            mysqli_query($db, "call asignacionI('$_asignacion->getNombre()','$_asignacion->getDescripcion()','$_asignacion->getFechaHoraAsignacion()','$_asignacion->getMedioEntrega()','$_asignacion->getTipo()','$_asignacion->getPorcentaje()','$_asignacion->getIdCurso()')");
            $connection->closeMySqlDB();
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }    
}
?>
