<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Primo PHP</title>
    <style>
    .testo-rosso {
        color: red;
    }
    </style>
</head>
<body>
    
<?php
// parole riservate
echo "<p> Ciao sono PHP </p>";

// Stinghe
$nome = "Roberto";
$cognome = "Rossi";

$frase = "<p>Ciao oggi ho visto $nome $cognome </p>";
$frase = '<p>Ciao oggi ho visto $nome $cognome </p>';
$frase = '<p>Ciao oggi ho visto '.$nome.' '.$cognome. '</p>';
?> 
<p class="testo-rosso"> Ciao oggi ho visto  <?php echo "$nome $cognome" ?> </p>
<?php echo $frase; ?>

<?php
//  commento singola riga
/* 
    commento multiriga
*/
echo "<h2>Array</h2>";
// indicizzati

$colori  = array('red','green','blue');
// echo $colori;

echo $colori[0]."<br>";
echo "$colori[1] <br>";

// aggiunge un valore in coda array
$colori[] = "yellow";

echo "<pre>";
print_r($colori);
echo "</pre>";

?>


</body>
</html>