<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class cursoEN
{
    private $idCurso;
    private $nombre;
    private $sigla;
    private $horario;
    private $creditos;
    private $calificacion;
    
    public function getIdCurso() {
        return $this->idCurso;
    }

    public function setIdCurso($idCurso) {
        $this->idCurso = $idCurso;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function getSigla() {
        return $this->sigla;
    }

    public function setSigla($sigla) {
        $this->sigla = $sigla;
    }

    public function getHorario() {
        return $this->horario;
    }

    public function setHorario($horario) {
        $this->horario = $horario;
    }

    public function getCreditos() {
        return $this->creditos;
    }

    public function setCreditos($creditos) {
        $this->creditos = $creditos;
    }
    public function getCalificacion() {
        return $this->calificacion;
    }

    public function setCalificacion($calificacion) {
        $this->calificacion = $calificacion;
    }
}
?>
