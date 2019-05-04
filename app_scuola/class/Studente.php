<?php
// Dichiarazione di classe, lo Studente eredita le caratteristiche della Perssona
// Persona  classe Padre  (Parent)
// Studente classe Figlia (Child)

class Studente extends Persona
{
    // proprietà e  i metodi che riguardano lo Studente
    public $voti = array();

     /* metodo */
     /* usato is_numeric: https://www.php.net/manual/en/function.is-numeric.php
     */
     public function aggiungiVoto($voto)
     {
         if(is_string($voto))  {
            return false; 
         }



         /* $this indica che state usando i voti dell'istanza dello studente*/
         $this->voti[] = $voto;
     }
 
     public function ottieniMedia(){
         $somma_voti  = array_sum($this->voti);
         $numero_di_voti = count($this->voti);
         $media = $somma_voti / $numero_di_voti;
         return $media;
     }
    
}