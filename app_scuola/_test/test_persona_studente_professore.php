<?php
include '../class/Persona.php';
include '../class/Studente.php';
include '../class/Professore.php';

/** Creo un istanza di Studente */
$studente  =  new Studente();

$studente->nome = "Marco";
$studente->cognome = "Rossi";
$studente->classe = 2;
$studente->sezione = "B";

$studente->email = "marco.rossi@email.edu";

print_r($studente);


/** Creo un istanza di Professore */
$professore = new Professore();

$professore->nome = "Giovanni";
$professore->cognome = "Sbattuti";
$professore->classe = 2;
$professore->sezione = "B";

$professore->email = "giovanni.sbattuti@email.edu";


print_r($professore);
