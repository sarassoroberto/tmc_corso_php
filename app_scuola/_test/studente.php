<?php
// carico prima Persona perchè seve a Studente  (Persona è una dipendenza di Studente)
require '../class/Persona.php';
require '../class/Studente.php';

// crea un istanza della classe Studente
$studente = new Studente();

// Assegnare  proprietà a un istanza
$studente->nome = "Roberto";
$studente->cognome = "Spahetti";


print_r($studente);

