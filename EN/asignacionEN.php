<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class asignacionEN
{
    private $idAsignaciones;
    private $nombre;
    private $detalles;
    private $fechaAsignacion;
    private $fechaEntrega;
    public function getIdAsignaciones() {
        return $this->idAsignaciones;
    }

    public function setIdAsignaciones($idAsignaciones) {
        $this->idAsignaciones = $idAsignaciones;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getDetalles() {
        return $this->detalles;
    }

    public function setDetalles($detalles) {
        $this->detalles = $detalles;
    }

    public function getFechaAsignacion() {
        return $this->fechaAsignacion;
    }

    public function setFechaAsignacion($fechaAsignacion) {
        $this->fechaAsignacion = $fechaAsignacion;
    }

    public function getFechaEntrega() {
        return $this->fechaEntrega;
    }

    public function setFechaEntrega($fechaEntrega) {
        $this->fechaEntrega = $fechaEntrega;
    }
}
?>
