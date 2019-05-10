<?php
class Studente extends Persona
{
    /* i voti sono la caratteristica che differenzia lo Studente da una Persona */
    private $voti = array();

    /** metodo */
    public function aggiungiVoto($voto)
    {
        /** $this indica che state usando i voti dell'istanza dello studente*/
        $this->voti[] = $voto;
    }

    public function ottieniMedia()
    {
        $somma_voti  = array_sum($this->voti);
        $numero_di_voti = count($this->voti);
        $media = $somma_voti / $numero_di_voti;
        return $media;
    }
}
