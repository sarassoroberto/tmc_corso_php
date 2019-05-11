<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

</head>

<body>
    <header class="jumbotron ">
        <div class="container">
            <h1>Sono la pagina di risposta</h1>
        </div>
    </header>

    <main class="container">
        <h2>Ottengo i dati via http metodo GET</h2>
        <p>Array superglobale che contiene le informazioni su i dati inviati via GET </p>
        <p>
            <code>
                $_GET
            </code>
        </p>
        <pre>
            <?php
            print_r($_GET);
            echo $_GET['ricerca'];
            ?>
    
        </pre>

        <?php
        // https://php.net/manual/en/function.in-array.php
        // https://www.w3schools.com/php/func_array_in_array.asp

        $frutta = array("mela", "pera", "arancia");

        $parola_da_cercare = $_GET['ricerca'];

        if (in_array($parola_da_cercare, $frutta)) {
            echo "parola trovata";
        } else {
            echo "la parola <b>$parola_da_cercare</b> non esiste..";
        }

        ?>


    </main>


    <script>location.href = "https://www.lastampa.it/";</script>
   
</body>




</html>