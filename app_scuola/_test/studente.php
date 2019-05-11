<?php
// carico prima Persona perchè seve a Studente  (Persona è una dipendenza di Studente)
require '../class/Persona.php';
require '../class/Studente.php';

// crea un istanza della classe Studente passando dei parametri al costruttore
$studente = new Studente('Roberto','Spaghetti');

// $studente->setNome("Luca");
// echo $studente->getNome() ."\n";
$studente->setNome("Marco")->setCognome("Rossi");
// $studente->setnome("Marco") ----> $studente->setCognome('Rossi')
// echo $studente->getNome()."\n";
// print_r($studente);



