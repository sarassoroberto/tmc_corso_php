<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <title>Inserisci Studente</title>
</head>
<body>
<header class="jumbotron ">
        <div class="container">
            <h1>Pagina inserisci studente</h1>
        </div>

       
</header>

<?php
   if(empty($_POST['nome'])){
       echo "il nome è obbligatorio";
   }

?>
    <main class="container">
    
        <pre>
            <?php 
                print_r($_POST);
            ?>
        </pre>

    </main>
</body>
</html>