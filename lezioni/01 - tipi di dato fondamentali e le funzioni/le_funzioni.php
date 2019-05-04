<?php 
/* dichiarazione della funzione  */

/**
 * funzione per stampare i dati di una persona a schermo
 *
 * @param array $p array che descrive una persona
 * @return void 
 */

function stampa_persona($p){
    // $p è una variabile locale
    // la procedura / istruzioni da eseguire
    ?>
    <div class="persona">
        <h3><?php echo $p['nome'].' '.$p['cognome'] ?></h3>
        <p>gusti di gelato: </p>
        <ul>
            <?php 
            foreach ($p['gusti_gelato_preferiti'] as $gusto) {
                echo "<li>$gusto</li>";
            } 
            ?>
            
        </ul>
    </div>

<?php } 
// chiusura dichiarazione della funzione

$persona = array(
    'nome' => 'Roberto',
    'cognome'=> 'Rossi',
    'gusti_gelato_preferiti' => array(
                                    'fragola',
                                    'menta',
                                    'ciccolato'
                                    )
);
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
   
   
</body>
</html>