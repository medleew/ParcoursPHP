<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>generateur d'excuses</title>
</head>
<body>
    <h1>Generateur d'excuses</h1>
    <div class="container">
        <form action="excuse.php" method="get">
            <h3>Nom complet:</h3>
            <div class="name"><input type="text" name="name" value=""> <br/></div>
            <h3>Sexe:</h3>
            <div class="sexe">F <input type="checkbox" name="sexe" value="female"> M <input type="checkbox" name="sexe" value="male"> <br/></div>    
            <h3>Institutrice: </h3>
            <div class="instit"><input type="text" name="tutor"> <br/></div> 
            <h2>Raison de l'absence : </h2>
            <div class="excuses">
                Maladie <input type="radio" name="excuse_reason" value="maladie"> <br/>
                Décès de l'animal de compagnie <input type="radio" name="excuse_reason" value="deces"> <br/>
                Activité extra-scolaire importante<input type="radio" name="excuse_reason" value="extra_scolaire"> <br/>
                Excuse aleatoire <input type="radio" name="excuse_reason" value="aleatoire"> <br/>  
            </div>
            <input class="submit" type="submit" value="submit">
        </form>
    </div>

    <?php
        $name = $_GET['name'];
        $sexe = $_GET['sexe'];
        $tutor = $_GET['tutor'];
        $excuse_reason = $_GET['excuse_reason'];

        if ($excuse_reason == 'maladie') {
            maladie($name, $sexe, $tutor);
        } elseif ($excuse_reason == 'deces') {
            déces($name, $sexe, $tutor);
        } elseif ($excuse_reason == 'extra_scolaire') {
            extra_scolaire($name, $sexe, $tutor); 
        } elseif ($excuse_reason == 'aleatoire') {
            excuse_aleatoir($name, $sexe, $tutor);
        }
        
        
        function maladie ($name, $sexe, $tutor) {
            if ($sexe == 'female') {
                $sexe = "Ma fille ";
            } else {
                $sexe = "Mon fils";
            }
            echo "
            <div class='justificatif'>
                Monsieur le principal <br/> " . $sexe . " " . $name . " , élève en classe de 4ième dans votre collège, ne pourra pas assister au cours aujourd’hui. <br/>
                Son état de santé justifie cette absence. Le médecin de famille lui a préconisé une période de repos. <br/>
                Notre enfant devrait reprendre la classe dans une semaine, soit le lundi 20 septembre 2018. <br/>
                Pour tout complément d’informations n’hésitez surtout pas à nous contacter. <br/>
                
                Nos plus sincères salutations <br/>
                Signature des parents (mère ou père). 
            </div>";
        }
        function déces ($name, $sexe, $tutor) {
            if ($sexe == 'female') {
                $sexe = "Ma fille ";
            } else {
                $sexe = "Mon fils";
            }
            echo"
            <div class='justificatif'>
                Bonjour madame ".$tutor.", je vous pris d'excuser ".$sexe." ".$name." pour son absence à cause d'un déces dans la famille ".$pronom." sera de retour pour bientot
            </div>";
        }
        function extra_scolaire ($name, $sexe, $tutor) {
            if ($sexe == 'female') {
                $sexe = "Ma fille ";
                $pronom = 'Elle';
            } else {
                $sexe = "Mon fils";
                $pronom = "Il";
            }
            echo"
            <div class='justificatif'>
                Bonjour madame ".$tutor.", je vous pris d'excuser ".$sexe." ".$name."<br/> pour son absence à cause d'une activitée extra scolaire qu'".$pronom." a entrepris depuis <br/> une semaine qui est dormir tout la journée 
            </div>";
        }
        function excuse_aleatoir ($name, $sexe, $tutor) {
            $random = mt_rand(1,4);
            switch ($random) {
                case 1:
                maladie ($name, $sexe, $tutor);
                    break;
                case 2:
                déces ($name, $sexe, $tutor);
                    break;
                case 3:
                extra_scolaire ($name, $sexe, $tutor);
                    break;
                // case 4:

                //     break;
            }
        }

    ?>


</body>
</html>