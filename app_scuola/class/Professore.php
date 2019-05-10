<?php
class Professore extends Persona
{
    /* i voti sono la caratteristica che differenzia il Professore da una Persona */
    private $materia;

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
