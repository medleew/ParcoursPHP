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
        // $chaine = 'Cette chaîne va être mélangée !';
        // $chaine = str_shuffle($chaine);
        
        // echo $chaine;
    //---------------------------------------------------------
        majuscule("momo");
        function majuscule($word){
            echo ucwords($word);
        }
        echo "<br/>";
    //--------------------------------------------------
        year();
        function year(){
            echo date("Y");
            echo '<br/>';
            echo date('h:i:sa');
        }
        echo "<br/>";    
    //-------------------------------------------------------
        somme(60,"becode");
        function somme($a, $b){
            if (is_numeric($a) == 1 and is_numeric($b) == 1) {
                echo $a + $b;
            } else {
                echo "Erreur, argument non numérique";
            }
        }
        echo "<br/>";
    //----------------------------------------------------------
        initials("In code we trust!");
        function initials($value) {
            $array = (explode(" ", $value));
            $initial = "";
            foreach ($array as $key) {
                $initial .= substr($key,0,1);
            }
            echo $initial;
        }
        echo "<br/>";
    //-------------------------------------------------------------
        changeAEtE("sphaerotheca");
        function changeAEtE($value){
            $array = str_split($value);
            for ($i=0; $i < count($array) ; $i++) {
                if ($array[$i] == "a" and $array[$i+1] == "e") {
                array_splice($array, $i , 2 , "æ");
                }
            }
            echo implode("",$array);
        }
        echo "<br/>";
        changeBack("microsphaera");
        function changeBack($value){
            echo str_replace( "æ", "ae" , $value);
        }
        echo "<br/>";
    //--------------------------------------------------------------------
        message("La consigne n'est pas claire", "warning");
        function message($message, $class = "info"){
            echo "<div class = $class > $message</div>";
        }
        echo "<br/>";
        echo "<input type='submit' name='Reload Page' value='Reload Page' onclick='window.location.reload();'>";
        echo "<br/>";
    //------------------------------------------------------------------------
        deuxMots();
        function deuxMots($value=''){
            for ($i=0; $i < rand(1,5) ; $i++) {
                echo  chr(rand(97,122));
            }
            echo "<br/>";
            for ($j=0; $j < rand(7,15) ; $j++) {
                echo chr(rand(97,122));
            }
        }
        echo "<br/>";
    //------------------------------------------------------------------------------------
        minuscules("ARRÊTE DE CRIER JE N'ENTENDS PLUS RIEN!!!");
        function minuscules($value=''){
            echo strtolower($value);
        }
        echo "<br/>";
    //-----------------------------------------------------------------------------------------
        volume_dun_cone(10 , 4);
        function volume_dun_cone($rayon, $hauteur){
            echo $rayon * $rayon * 3.14 * $hauteur * (1/3);
        }
        echo "<br/>";
    //---------------------------------------------------------------------------------------------
        reverse_string("Buvons un coup ma serpette est perdue");
        function reverse_string($phrase){
            $mot = str_split($phrase);
            for ($i=count($mot)-1; $i >= 0 ; $i--) {
                echo $mot[$i];
            }
        }
    ?>
</body>
</html>