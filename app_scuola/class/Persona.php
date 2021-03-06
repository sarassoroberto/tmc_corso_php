<?php
class Persona
{
    protected $nome;
    protected $cognome;
    protected $email;

    protected $classe;
    protected $sezione;



    // new Studente('roberto','spaghetti')
    //  
    function __construct($nome = '', $cognome = '', $classe = '', $sezione = '')
    {
        // $this->nome rappresenta la proprietà "nome" dell' istanza della Persona
        $this->nome = $nome;
        $this->cognome = $cognome;
        $this->classe = $classe;
        $this->sezione = $sezione;
    }


    public function setNome($nome)
    {
        // non ci possono essere numeri   
        $this->nome = $nome;
        return $this;
    }


    public function gettNome()
    {

        return  $this->nome;
    }





    /**
     * Get the value of classe
     */
    public function getClasse()
    {
        return $this->classe;
    }

    /**
     * Set the value of classe
     *
     * @return  self
     */
    public function setClasse($classe)
    {
        $this->classe = $classe;

        return $this;
    }

    /**
     * Get the value of sezione
     */
    public function getSezione()
    {
        return $this->sezione;
    }

    /**
     * Set the value of sezione
     *
     * @return  self
     */
    public function setSezione($sezione)
    {
        $this->sezione = $sezione;

        return $this;
    }

    /**
     * Get the value of email
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * Get the value of nome
     */
    public function getNome()
    {
        return $this->nome;
    }

    /**
     * Get the value of id
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    /**
     * Get the value of cognome
     */
    public function getCognome()
    {
        return $this->cognome;
    }

    /**
     * Set the value of cognome
     *
     * @return  self
     */
    public function setCognome($cognome)
    {
        $this->cognome = $cognome;

        return $this;
    }
}
