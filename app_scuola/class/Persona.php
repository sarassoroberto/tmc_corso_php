<?php
class Persona
{
    public $nome;
    public $cognome;
    public $classe;
    public $sezione;
    public $email;

    public function __construct($nome, $cognome, $classe, $sezione)
    {
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->classe = $classe;
        $this->sezione = $sezione;
    }
}
