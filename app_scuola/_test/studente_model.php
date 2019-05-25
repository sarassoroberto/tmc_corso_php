<?php

include "../config.php";
include "../model/StudenteModel.php";
include "../class/Persona.php";
include "../class/Studente.php";


$sm = new StudenteModel();
 //$studente = new Studente('Riccardo','Rossi','3','B');
 // $studente = new Studente('Mario','Rossi','3','B');
 // $studente = new Studente('Umberto','Millini','3','B');
//  $studente = new Studente('Violetta','Righetti','3','B');
//  $studente = new Studente('Filomena','Folino','3','B');
//  $studente = new Studente('Walter','Giampietro','3','B');
// $sm->create($studente);

// modifico studente con id 1
$studente_array =  $sm->read(1);
print_r($studente_array);

$studente_array['nome'] = "XXX";

$sm->update($studente_array); //array



// print_r($res);

