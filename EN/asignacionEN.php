<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class asignacionEN
{
    private $idAsignaciones;
    private $nombre;
    private $descripcion;
    private $fechaHoraAsignacion;
    private $medioEntrega;
    private $tipo;
    private $porcentaje;
    private $calificacion;
    
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

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function getFechaHoraAsignacion() {
        return $this->fechaHoraAsignacion;
    }

    public function setFechaHoraAsignacion($fechaHoraAsignacion) {
        $this->fechaHoraAsignacion = $fechaHoraAsignacion;
    }
    
    public function getMedioEntrega() {
        return $this->medioEntrega;
    }

    public function setMedioEntrega($medioEntrega) {
        $this->medioEntrega = $medioEntrega;
    }
    
    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }

        public function getPorcentaje() {
        return $this->porcentaje;
    }

    public function setPorcentaje($porcentaje) {
        $this->porcentaje = $porcentaje;
    }   
    public function getCalificacion() {
        return $this->calificacion;
    }

    public function setCalificacion($calificacion) {
        $this->calificacion = $calificacion;
    }
}
?>
