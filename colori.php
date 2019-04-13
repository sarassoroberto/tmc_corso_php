<?php 
// $colori = array();
$colori = ["red","blue","green","rebeccapurple"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Colori</title>
    <style>
    .elenco-colori li {
        width: 5rem;
        height:5rem;
        border: 1px solid black;
    }
    
    </style>
</head>
<body>
<h1>Esercizio array colori</h1> 

<ul class="elenco-colori">
    <?php foreach ($colori as $colore )
            {
                echo "<li style='background:$colore'> $colore  </li>";   
            }
    ?>   
</ul>

<!--
<p style="color:red;background: green;">
 rosso
</p>
-->
</body>
</html>