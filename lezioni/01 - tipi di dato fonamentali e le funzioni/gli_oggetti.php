<?php
class Studente {
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

    public function ottieniMedia(){
        $somma_voti  = array_sum($this->voti);
        $numero_di_voti = count($this->voti);
        $media = $somma_voti / $numero_di_voti;
        return $media;
    }
}

/* ------------------------------------------------- */

// $a = 10;
// creo un istanza della classe Studente e la assegno a una variabile
$studente = new Studente();

$studente->nome = "Roberto";
$studente->cognome = "Vespucci";
$studente->aggiungiVoto(10);
$studente->aggiungiVoto(5);

$studente2 = new Studente();

$studente2->nome = "Marco";
$studente2->cognome = "Rosso";
$studente2->aggiungiVoto(7);
$studente2->aggiungiVoto(8);
$studente2->aggiungiVoto(7);

echo "la media di $studente->nome è " . $studente->ottieniMedia() . "<br>";
echo "la media di $studente2->nome è " . $studente2->ottieniMedia() . "<br>";

//print_r($studente);
