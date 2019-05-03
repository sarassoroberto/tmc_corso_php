<?php
include '../class/Persona.php';
include '../class/Studente.php';
include '../class/Professore.php';

/** Creo un istanza di Studente */
$studente  =  new Studente('Marco', 'Rossi', 2, 'B');

$studente->email = "marco.rossi@email.edu";

print_r($studente);


/** Creo un istanza di Professore */
$professore = new Professore('Giovanni', 'Sbattuti', 2, 'B');

$professore->email = "giovanni.sbattuti@email.edu";


print_r($professore);
