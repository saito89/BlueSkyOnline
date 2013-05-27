<?php
//include 'mySqlConnection.php';
include '../EN/cursoEN.php';
/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class cursoDA
{
    //Selects all the Cursos from a specific user
    function cursoSInfo($_idUsuario)
    {
        try
        {
            $connection = new mySqlConnection();
            $db = $connection->openMySqlDB('190.7.192.3','espe','T3cn0l0gic0.2013','bluesky');
            $res = mysqli_query($db, "call cursoSInfo('$_idUsuario')");
            $connection->closeMySqlDB();
            $listCurso = array();
            while($cu = mysqli_fetch_array($res))
            {
                $cEN = new cursoEN();
                $cEN->setIdCurso($cu['idCurso']);
                $cEN->setNombre($cu['nombre']);
                $cEN->setSigla($cu['sigla']);
                $cEN->setHorario($cu['horario']);
                $cEN->setCreditos($cu['creditos']);
                $cEN->setCalificacion($cu['calificacion']);
                /*echo $cEN->getIdCurso();
                echo $cEN->getNombre();
                echo $cEN->getSigla();
                echo $cEN->getHorario();
                echo $cEN->getCreditos();
                echo $cEN->getCalificacion();*/
                array_push($listCurso, $cEN);
            }
            return $listCurso;
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }
    //Inserts a student into a specific Curso
    function usuario_has_cursoI($_idUsuario,$_idCurso)
    {
        try
        {
            $connection = new mySqlConnection();
            $db = $connection->openMySqlDB('190.7.192.3','espe','T3cn0l0gic0.2013','bluesky');            
            mysqli_query($db, "call usuario_has_cursoI('$_idUsuario','$_idCurso')");
            $connection->closeMySqlDB();
        }
        catch(Exception $ex)
        {
            echo $ex->getMessage();
        }
    }  
}
?>
