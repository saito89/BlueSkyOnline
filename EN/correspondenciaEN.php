<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class correspondenciaEN
{
    private $idCorrespondencia;
    private $texto;
    private $respuesta;
    private $idTipoCorrespondencia;
    private $idUsuario;
    private $idCurso;
    public function getIdCorrespondencia() {
        return $this->idCorrespondencia;
    }

    public function setIdCorrespondencia($idCorrespondencia) {
        $this->idCorrespondencia = $idCorrespondencia;
    }

    public function getTexto() {
        return $this->texto;
    }

    public function setTexto($texto) {
        $this->texto = $texto;
    }

    public function getRespuesta() {
        return $this->respuesta;
    }

    public function setRespuesta($respuesta) {
        $this->respuesta = $respuesta;
    }

    public function getIdTipoCorrespondencia() {
        return $this->idTipoCorrespondencia;
    }

    public function setIdTipoCorrespondencia($idTipoCorrespondencia) {
        $this->idTipoCorrespondencia = $idTipoCorrespondencia;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function getIdCurso() {
        return $this->idCurso;
    }

    public function setIdCurso($idCurso) {
        $this->idCurso = $idCurso;
    }
}
?>
