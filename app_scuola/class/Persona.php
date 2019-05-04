<?php
class Persona {
    public $nome;
    public $cognome;
    public $email;
   
    public $classe;
    public $sezione;

    // new Studente('roberto','spaghetti')
    //  
    function __construct($nome,$cognome,$classe = '',$sezione = '')
    {
       // $this->nome rappresenta la proprietà "nome" dell' istanza della Persona
       $this->nome = $nome;
       $this->cognome = $cognome;
       $this->classe = $classe;
       $this->sezione = $sezione;

    }
}