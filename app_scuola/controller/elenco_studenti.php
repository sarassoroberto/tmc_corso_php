<?php

include "../config.php";
include "../model/StudenteModel.php";
include "../class/Persona.php";
include "../class/Studente.php";

$sm = new StudenteModel();
$tutti_studenti = $sm->readAll();

include "../view/elenco_studenti_view.php";
// print_r($tutti_studenti);
?>