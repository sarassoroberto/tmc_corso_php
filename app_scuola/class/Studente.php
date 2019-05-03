<?php
class Studente
{
    /** proprietà o attributi */
    public $nome;
    public $cognome;
    public $voti = array();

    /** metodo */
    public function aggiungiVoto($voto)
    {
        /** apri database trova studente e assegna nuovo voto */
        /** $array[] = 10 */
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
