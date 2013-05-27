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
            $nombre = $_asignacion->getNombre();
            $descripcion = $_asignacion->getDescripcion();
            $fechaHoraAsignacion = $_asignacion->getFechaHoraAsignacion();
            $medioEntrega = $_asignacion->getMedioEntrega();
            $tipo = $_asignacion->getTipo();
            $porcentaje = $_asignacion->getPorcentaje();
            $idCurso = $_asignacion->getIdCurso();
            mysqli_query($db, "call asignacionI('$nombre','$descripcion','$fechaHoraAsignacion','$medioEntrega','$tipo','$porcentaje','$idCurso')");
            $connection->closeMySqlDB();
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }  
    function asignacionU($_asignacion)
    {
        try
        {
            $connection = new mySqlConnection();
            $db = $connection->openMySqlDB('190.7.192.3','espe','T3cn0l0gic0.2013','bluesky');
            $id = $_asignacion->getIdAsignacion();
            $nombre = $_asignacion->getNombre();
            $descripcion = $_asignacion->getDescripcion();
            $fechaHoraAsignacion = $_asignacion->getFechaHoraAsignacion();
            $medioEntrega = $_asignacion->getMedioEntrega();
            $tipo = $_asignacion->getTipo();
            $porcentaje = $_asignacion->getPorcentaje();
            $idCurso = $_asignacion->getIdCurso();
            mysqli_query($db, "call asignacionU('$id','$nombre','$descripcion','$fechaHoraAsignacion','$medioEntrega','$tipo','$porcentaje','$idCurso')");
            $connection->closeMySqlDB();
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
}
?>
