<?php 
class Docente extends Persona{
    
    public $materia;

    /**
     * Get the value of materia
     */ 
    public function getMateria()
    {
        return $this->materia;
    }

    /**
     * Set the value of materia
     *
     * @return  self
     */ 
    public function setMateria($materia)
    {
        $this->materia = $materia;

        return $this;
    }
}