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
        Your Grade: <input type="text" name="grade"><br>
        <input type="submit">
    </form>

    <?php
        $grade = $_POST['grade'];

        switch ($grade) {
            case 1: 
            echo "Ce travail est nul.";
            break;
            case 2: 
            echo "Ce travail est nul.";
            break;
            case 3: 
            echo "Ce travail est nul.";
            break;
            case 6: 
            echo "Ce travail n'est pas terrible.";
            break;
            case 7: 
            echo "Ce travail n'est pas terrible.";
            break;
            case 8:
            echo "Ce travail n'est pas terrible.";
            break;
            case 9:
            echo "Ce travail n'est pas terrible.";
            break;
            case 10:
            echo "Tout juste!";
            break;
            case 11: 
            echo "C'est pas mal.";
            break;
            case 12: 
            echo "C'est pas mal.";
            break;
            case 13: 
            echo "C'est pas mal.";
            break;
            case 14: 
            echo "C'est pas mal.";
            break;
            case 15:
            echo "Bravo !";
            break;
            case 16:
            echo "Bravo !";
            break;
            case 17:
            echo "Bravo !";
            break;
            case 18:
            echo "Bravo !";
            break;
            case 19:
            echo "Police! Arrêtez ce tricheur!";
            break;
            case 20:
            echo "Police! Arrêtez ce tricheur!";
            break;
        }

    ?>
</body>
</html>