<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="ternaire.php" method="post">
      Femme:  <input type="button" value="" name="F"> <br/>
      Homme:  <input type="button" value="" name="H">
    </form>

    <?php
        $homme = $_POST['H'];
        $femme = $_POST['F'];
        $bonjour = "Hello ";
        $genre = ($genre = $homme) ?  $bonjour . 'homme' : ($genre = $femme) ? $bonjour . 'femme' : 'nothing';
        echo "<td><input type='checkbox' name='money' id='money'".(($money == 'yes')?'"checked"':" "."value='yes' /></td>");
    ?>
</body>
</html>