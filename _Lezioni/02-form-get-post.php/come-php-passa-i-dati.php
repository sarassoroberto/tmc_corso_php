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
          <a class="btn btn-outline-primary" href="risposta.php?ricerca=matteo"> clicca qui per andare alla risposta</a>
      </p>

      <pre>
      dominio: https://www.google.com
      pagina:  /search
      query string:
                    ?
                    q=pera
                    &
                    oq=pera
                    &
                    nome=roberto
      </pre>
    </main>


</body>
</html>