<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
    <input type="radio" name="genre" value="homme">Homme<br/>
    <input type="radio" name="genre" value="femme">Femme<br/>
    Anglais :
    <input type="radio" name="anglais" value="yes">Yes
    <input type="radio" name="anglais" value="non">Non <br/>
    Age: <input type="number" name="age"><br/>
    <input type="submit">
    </form>

    <?php
        $age = $_POST["age"];
        $genre = $_POST["genre"];
        $anglais = $_POST["anglais"];

        if ($genre == "femme") {
            if ($anglais == "non") {
                if ($age < 12) {
                        echo "Salut petite!";
                    } elseif ($age >= 12 and $age < 18) {
                        echo "Salut l'ado!";
                    } elseif ($age >= 18 and $age < 115) {
                        echo "Salut l'adulte!";
                    } elseif ($age > 115) {
                        echo "Wow! Toujours vivante? ";
                    }
            } elseif ($anglais == "yes") {
                if ($age < 12) {
                    echo "Hello Girl!";
                } elseif ($age >= 12 and $age < 18) {
                    echo "Hello teenage girl!";
                } elseif ($age >= 18 and $age < 115) {
                    echo "Hello lady!";
                } elseif ($age > 115) {
                    echo "Wow! Still alive, old lady?";
                }
            }
        } elseif ($genre == "homme") {
            if ($anglais == "non") {
                if ($age < 12 ) {
                    echo "Salut petit!";
                } elseif ($age >= 12 and $age < 18) {
                    echo "Salut l'ado!";
                } elseif ($age >= 18 and $age < 115) {
                    echo "Salut l'adulte!";
                } elseif ($age > 115) {
                    echo "Wow! Toujours vivant?";
                }
            } elseif ($anglais == "yes") {
            if ($age < 12 ) {
                echo "Hello boy!";
                } elseif ($age >= 12 and $age < 18) {
                    echo "Hello teenage boy!";
                } elseif ($age >= 18 and $age < 115) {
                    echo "Hello sir!";
                } elseif ($age > 115) {
                    echo "Wow! Still alive, old man?";
                }
            }
        }
    ?>
</body>
</html>