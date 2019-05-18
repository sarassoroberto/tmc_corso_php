<?php
if(isset($_POST['nome'])){
    $nome = htmlspecialchars(trim($_POST['nome']));
} else{
    $nome = "";
}

//operatore ternario
// $var = <condizione> ? <valore pre true> : <valore per false>;
$cognome = isset($_POST['cognome']) ? htmlspecialchars(trim($_POST['cognome'])) : "";

// isset($_POST['email']) //la mail valorizzata

// email vuota ok
// email corretta ok
$err_mail = true;
if(isset($_POST['email'])){
   $err_mail = filter_var($_POST['email'],FILTER_VALIDATE_EMAIL);  
   $email = $_POST['email'];
   
}else{
   $email = ""; 
}

var_dump(boolval($_POST['email']));
echo "<br>email <br>";
var_dump(boolval($email));
echo "<br>err_mail <br>";
var_dump(boolval($err_mail));


if($nome && $cognome && $err_mail){
    echo "salva i dati";

}

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
    
      <h2>Inserisci studente</h2>
      <form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="POST">
        <div>
            <label >nome </label>
            <input type="text" name="nome" value="<?= $nome ?>" >
            <?php if(!$nome){
                echo "<p>devi compilare il nome</p>";
            }?>
        </div>
        <div>
            <label >cognome </label>
            <input type="text" name="cognome" value="<?= $cognome ?>">
            <?php if(!$cognome){
                echo "<p>devi compilare il cognome</p>";
            }?>
        </div>
        <div>
            <label for="email">scrivi la TUA E-MAIL </label>
            <input type="text" name="email" value="<?= $email ?>">
            <?php if(!$err_mail){
                echo "<p>formato e-mail errato</p>";
            }?> 
        </div>
        <div>
            <button type="submit">aggiungi studente</button>
            <button type="reset">cancalla</button>
        </div>
      </form>

    </main>


</body>
</html>