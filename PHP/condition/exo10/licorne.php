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
    Es-tu un : <br/>
    Humain <input type="checkbox" name="H"> <br/>
    Licorne <input type="checkbox" name="L">
    <input type=submit value=submit />
    </form>

    <?php
       $homme = $_POST['H'];
       $licorne = $_POST['L'];
    //    $gif = ($gif = $homme) ?  echo '<img src="" alt="">';  ($gif = $licorne) ? echo '<img src="" alt="">' ;
    ?>
    
</body>
</html>