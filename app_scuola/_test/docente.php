<?php
require '../class/Persona.php';
require '../class/Docente.php';

// crea un istanza della classe Docente
$docente = new Docente('Marco','Ventimiglia');
$docente2 = new Docente('Gianni','Ventimiglia',2,"B");

print_r($docente);
print_r($docente2);

