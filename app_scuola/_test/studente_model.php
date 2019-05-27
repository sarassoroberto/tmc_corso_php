<?php
error_reporting(E_ALL & ~E_NOTICE);
ini_set('display_errors', 1);

include "../config.php";
include "../model/StudenteModel.php";
include "../class/Persona.php";
include "../class/Studente.php";


$sm = new StudenteModel();
$res = $sm->readAll();

print_r($res);
