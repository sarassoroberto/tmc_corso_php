<?php
include '../class/Persona.php';
include '../class/Studente.php';
include '../class/Professore.php';

$studente  =  new Studente('Marco', 'Rossi', 2, 'B');

echo "\n# calcolo della media:\n\n";
$studente->aggiungiVoto(5);
echo $studente->ottieniMedia() == 5 ? "Test ok media = 5 \n" : "test fallito \n";

$studente->aggiungiVoto(5);
echo $studente->ottieniMedia() == 5 ? "Test ok media = 5 \n" : "test fallito \n";

$studente->aggiungiVoto(10);
$studente->aggiungiVoto(10);
echo $studente->ottieniMedia() == 7.5 ? "Test ok media = 7.5 \n" : "test fallito \n";
