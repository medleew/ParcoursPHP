<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <?php
        // $pronoms_personnels = array ('Je', 'Tu', 'Il/Elle','Nous', 'Vous', 'Elles/Ils');
        // $verbe_coder = ['code', 'codes', 'code', 'codons', 'codez', 'codent'];
        // foreach ($pronoms_personnels as $key) {
        //     echo $key;
        //     echo '<br/>';
        // }
        // echo '<br/>';
        // for ($i=0; $i < count($pronoms_personnels); $i++) { 
        //     echo $pronoms_personnels[$i] . ' ' . $verbe_coder[$i];
        //     echo '<br/>';
        // }
//-----------------------------------------------------------------------------------------------------

        // $nbreCopie = 1;
        // while ($nbreCopie <= 120) {
        // echo $nbreCopie;
        // $nbreCopie++;
        // echo "<br>";
        // }
        // for ($i=1 ; $i <= 120 ; $i++) {
        // echo $i;
        // echo "<br>";
        // }

//-------------------------------------------------------------------------------------------------------
        $classe = ['personne1', 'personne2', 'personne3', 'personne4', 'personne5', 'personne6', 'personne7', 'personne8', 'personne9', 'personne10'];
        for ($i=0; $i <count($classe) ; $i++) {
        echo $classe[$i];
        echo "<br>";
        }
        $pays = ['Belgique' , 'France', 'Pays-Bas', 'Allemagne', 'Brésil', 'Perou', 'Autriche' ,'Australie', 'Italie','Espagne'];
    ?>
        <form action="index.php" method="post">
            <?php
                for ($j=0 ; $j < count($pays) ; $j++) {
                    echo $pays[$j] . '<input type="radio" name="pays" value="' . $pays[$j] . '"><br>';
                }
                echo '<input type="submit">';
            ?>
        </form>
        <?php
            echo "<br>";
            echo "<br>";
            $choix = $_POST["pays"];
            echo "Pays : " . $choix;
        ?>
</body>
</html>