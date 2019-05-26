<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);

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
echo "Dati da modificare";
print_r($studente_array);

$studente = new Studente();
$studente->setId($studente_array['id_studente']);
/*---------------------------------------------*/

// visualizzo un form 

$studente->setNome('Marco cambiato 3 VOLTE');
/**------------------------------------------------ */

// $studente_array['nome'] = "XXX";
$row = $sm->update($studente); //array

echo "modificate $row colonne \n";

$studente_array =  $sm->read(1);

echo "Dati modificati:";
print_r($studente_array);
