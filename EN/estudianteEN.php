<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class estudianteEN
{
    private $idAsignacion;
    private $idUsuario;
    private $nombre;
    private $correoElectronico;
    
    public function getIdAsignacion() {
        return $this->idAsignacion;
    }

    public function setIdAsignacion($idAsignacion) {
        $this->idAsignacion = $idAsignacion;
    }

    public function getIdUsuario() {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario) {
        $this->idUsuario = $idUsuario;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getCorreoElectronico() {
        return $this->correoElectronico;
    }

    public function setCorreoElectronico($correoElectronico) {
        $this->correoElectronico = $correoElectronico;
    }


}
?>
