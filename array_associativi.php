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
        <h3><?php echo $persona['nome'].' '.$persona['cognome'] ?></h3>
        <p>gusti di gelato: </p>
        <ul>
            <?php 
            foreach ($persona['gusti_gelato_preferiti'] as $gusto) {
                echo "<li>$gusto</li>";
            } 
            ?>
            
        </ul>
    </div>
</body>
</html>