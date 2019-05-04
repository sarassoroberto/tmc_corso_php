<?php
// carico prima Persona perchè seve a Studente  (Persona è una dipendenza di Studente)
require '../class/Persona.php';
require '../class/Studente.php';

// crea un istanza della classe Studente passando dei parametri al costruttore
$studente = new Studente('Roberto','Spaghetti');

print_r($studente);

