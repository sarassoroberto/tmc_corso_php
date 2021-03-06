<?php
// print_r($_SERVER);
print_r($_POST);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <title>Passare dati in PHP</title>
</head>
<body>
    <header class="jumbotron ">
        <div class="container">
            <h1>Passare dati</h1>
        </div>
    </header>

    <main class="container">
      <h2>Passare dati via HTTP con il metodo GET</h2>
      <p>
          <a class="btn btn-outline-primary" href="risposta.php?ricerca=pera"> cerca pera</a>
      </p>
      <p>
          <a class="btn btn-outline-primary" href="risposta.php?ricerca=mela"> cerca mela</a>
      </p>

      <pre>
      dominio: https://www.google.com
      pagina:  /search
      query string: ?ricerca=pera
      </pre>

      <h2>I form</h2>
      <p><b>action:</b>[percorso] rappresenta il file che elaborerà i dati del form  </p>
      <p><b>input[text]:</b> Permette di raccogliere i dati di una riga di testo (striga) </p>
      <p><b>button[submit]:</b> Permette di raccogliere i dati di una riga di testo (striga) </p>

      <form action="<?php echo $_SERVER['PHP_SELF'] ?>">
        <label>Cosa vuoi cercare: </label>  
        <input type="text" name="ricerca">
        <button type="submit">cerca nel sito </button>
      </form>

    <hr>

      <h2>Inserisci studente</h2>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div>
            <label >nome </label>
            <input type="text" name="nome">
        </div>
        <div>
            <label >cognome </label>
            <input type="text" name="cognome">
        </div>
        <div>
            <button type="submit">aggiungi studente</button>
            <button type="reset">cancalla</button>
        </div>
      </form>

    </main>


</body>
</html>