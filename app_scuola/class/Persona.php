<?php
class Persona {
    private $nome;
    private $cognome;
    private $email;
   
    private $classe;
    private $sezione;

    public function setNome($nome)
    {
        
        $this->nome = $nome;
    
    }

    
    public function gettNome()
    {
        
       return  $this->$nome;
    }

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

    /**
     * Get the value of cognome
     */ 
    public function getCognome()
    {
        return $this->cognome;
    }

   
}