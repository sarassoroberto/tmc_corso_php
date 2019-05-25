<?php
class StudenteModel
{
    private $conn;
    public function __construct()

    {

        try {
            $dsn = "mysql:host=" . DB_HOST . ";dbname=" . DB_NAME;
            // "mysql:host=$servername;dbname=$dbname"
            // dichiarazione$dsn
            // $conn = new PDO("mysql:host=$servername;dbname=myDB", $username, $password);
            $this->conn = new PDO($dsn, DB_USER, DB_PASSWORD);

            // set the PDO error mode to exception
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // echo "Connected successfully"; 
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    public function create(Studente $studente)
    {
        // print_r($this->conn);
        // print_r($studente);
        $sql = "INSERT INTO `studente` (`nome`, `cognome`, `email`, `classe`, `sezione`)
                VALUES              (:nome, :cognome, :email, :classe, :sezione);
        ";
        $stm = $this->conn->prepare($sql);
        $stm->bindValue(':nome', $studente->getNome());
        $stm->bindValue(':cognome', $studente->getCognome());
        $stm->bindValue(':email', $studente->getEmail());
        $stm->bindValue(':classe', $studente->getClasse());
        $stm->bindValue(':sezione', $studente->getSezione());
        $stm->execute();
    }

    // ;drop database
    public function read($id_studente)
    {
        $stm = $this->conn->prepare("SELECT * 
                                     FROM Studente 
                                     where id_studente=:id_studente");
        $stm->bindValue(':id_studente',$id_studente);   

        $stm->execute();

        // PDO::FETCH_ASSOC è invece un parametro più specifico che restituisce un array indicizzato
        //  tramite i nomi dei campi presenti in tabella.

        return $stm->fetchAll(PDO::FETCH_ASSOC)[0]; //0
       
    }

    public function readAll()
    {
        $stm = $this->conn->prepare("SELECT * FROM Studente");   

        $stm->execute();

        return $stm->fetchAll(PDO::FETCH_ASSOC); //0
       
    }


    public function update(Studente $studente)
    {
        
        // ottengo il nome dello studente (che verra aggiornato)
        $nome = $studente->getNome();
        $id = $studente->getId();
        $email = $studente->getEmail();
        $cognome = $studente->getCognome();

        // preparo la query
        $stm = $this->conn->prepare(
            "UPDATE Studente 
                    SET nome = :nome,
                        cognome = :cognome,
                        email = :email,
                        classe = :classe,
                        sezione = :sezione,

             WHERE id_studente = :id      
            ");


        // associo i valori
        $stm->bindValue(':nome',$nome);    
        $stm->bindValue(':id',$id);    
        $stm->bindValue(':cognome',$cognome);    
        $stm->bindValue(':email',$email);    
        $stm->bindValue(':classe',$studente->getClasse());    
        $stm->bindValue(':sezione',$studente->getSezione());    

        // segue la query 
        $stm->execute();

        return $stm->rowCount();

       
        
    }


    public function delete($id_studente)
    {
        $stm = $this->conn->prepare("DELETE FROM Studente where id_studente=7");
        $stm->execute();
        
        if(!$stm->rowCount()) {
            echo "Record non trovato";
        }else {
        echo $stm->rowCount() . "Record cancellato con successo";
        }
    }
}
