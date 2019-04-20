<?php 
$persona = array(
    'nome' => 'Roberto',
    'cognome'=> 'Rossi',
    'gusti_gelato_preferiti' => array(
                                    'fragola',
                                    'menta',
                                    'ciccolato'
                                    )
);

//echo $persona['nome'];

/**
 * gusti_gelato_preferiti contiene un array indicizzato
 * @todo le chiavi associative e stampare una persona e i suoi
 *       gusti favoriti.
 * 
 *       rappresentare un elenco di persone. 
 */
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Array Associativi</title>
</head>
<body>
   
    <div class="persona">
        <h3>Roberto Rossi</h3>
        <p>gusti di gelato: </p>
        <ul>
            <li>fragola</li>
            <li>menta</li>
            <li>ciccolato</li>
        </ul>
    </div>
</body>
</html>