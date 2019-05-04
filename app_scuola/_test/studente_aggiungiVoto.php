<?php
// carico prima Persona perchè seve a Studente  (Persona è una dipendenza di Studente)
require '../class/Persona.php';
require '../class/Studente.php';

// crea un istanza della classe Studente passando dei parametri al costruttore
$studente = new Studente('Roberto','Spaghetti');

$studente->aggiungiVoto(5);

// nessun voto è una stringa
$studente->aggiungiVoto("ciccio");

// i voti devono essere dei numeri tra 1 e 10;
$studente->aggiungiVoto(13);
$studente->aggiungiVoto(-2);


echo "Numero di voti: ". count($studente->voti)."\n";
print_r($studente->voti);