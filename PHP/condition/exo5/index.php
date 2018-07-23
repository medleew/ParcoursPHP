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

        if ($grade <= 3) {
            echo "Ce travail est nul.";
        } elseif ($grade >= 6 AND $grade <= 9) {
            echo "Ce travail n'est pas terrible.";
        } elseif ($grade == 10) {
            echo "Tout juste!";
        } elseif ($grade >= 11 AND $grade <= 14) {
            echo "C'est pas mal.";
        } elseif ($grade >= 15 AND $grade <= 18) {
            echo "Bravo !";
        } elseif ($grade == 19 OR $grade == 20) {
            echo "Police! Arrêtez ce tricheur!";
        }    
    ?>
</body>
</html>