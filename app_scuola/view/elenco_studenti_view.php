<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<table>
    <tr>
        <th>nome </th>
    </tr>
    <?php foreach ($tutti_studenti as  $studente) {
        
        echo "<tr>";
        echo "<td>" . $studente['nome'] . "</td>";
        echo "</tr>";
    } ?>
    

</table>


</body>
</html>