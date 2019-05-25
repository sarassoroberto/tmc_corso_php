<?php
class StudenteModel {
    private $conn;

    public function __construct()
    {
        try {
            $dsn = "mysql:host=". DB_HOST . ";dbname=".DB_NAME ;
            $this->conn = new PDO($dsn,DB_USER, DB_PASSWORD);

            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully"; 
            }
        catch(PDOException $e)
            { 
            echo "Connection failed: " . $e->getMessage();
            }
        
    }

    public function create(Studente $studente)
    {
        print_r($studente);
        
        $sql = "INSERT INTO studente ( nome, cognome, email, classe, sezione) 
                 VALUES (:nome , :cognome,:email,:classe,:sezione);
                ";


        $stm = $this->conn->prepare($sql);
        $stm->bindValue(':nome',$studente->getNome());
        $stm->bindValue(':cognome',$studente->getCognome());
        $stm->bindValue(':email',$studente->getEmail());
        $stm->bindValue(':classe',$studente->getClasse());
        $stm->bindValue(':sezione',$studente->getSezione());
        
        $stm->execute();
    }
    public function read($id_studente)
    {
        
    }
    public function update($studente)
    {
        
    }
    public function delete($id_studente)
    {
        
    }
}