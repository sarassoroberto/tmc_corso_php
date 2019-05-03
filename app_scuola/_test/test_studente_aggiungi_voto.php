<?php
include '../class/Persona.php';
include '../class/Studente.php';
include '../class/Professore.php';

$studente  =  new Studente('Marco', 'Rossi', 2, 'B');

echo "\n# controllo aggiungi voto:\n\n";
echo $studente->aggiungiVoto(1) == true ? "Test ok \n" : "test fallito \n";
echo $studente->aggiungiVoto(5) == true ? "Test ok \n" : "test fallito \n";
echo $studente->aggiungiVoto(5.5) == true ? "Test ok \n" : "test fallito \n";

echo $studente->aggiungiVoto(100) == 'il voto deve essere max 10' ? "Test ok \n" : "test fallito \n";
echo $studente->aggiungiVoto(-3) == 'il voto deve essere min 1' ? "Test ok \n" : "test fallito \n";
echo $studente->aggiungiVoto("abcd") == 'il voto deve essere un numero' ? "Test ok \n" : "test fallito \n";
