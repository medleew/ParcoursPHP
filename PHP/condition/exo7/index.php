<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    Age : <input type="text" name="age"> 
    Sexe : <input type="text" name="sexe"> <br/>
    <input type="submit">
    </form>

    <?php
    $age = $_POST["age"];
    $sexe = $_POST["sexe"];

    if ($sexe == "Féminin" OR $sexe == "féminin") {
        if ( $age >= 21 AND $age <= 40) {
            echo "Bonjour, bienvenue parmi nous!";
        } else {
            echo "Désolé, vous ne remplissez pas les critères de sélection.";
        }
    } 
    
    ?>
</body>
</html>