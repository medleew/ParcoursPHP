<?php
$heureActuelle = 21 . 'h' . 01 ;
if ($heureActuelle >= 5 . 'h' . 00 AND $heureActuelle <= 9 . 'h' . 00) {
    echo "Bonjour!";
} elseif ($heureActuelle >= 9 . 'h' . 01 AND $heureActuelle <= 12 . 'h' . 00) {
    echo "Bonne journée!";
} elseif ($heureActuelle >= 12 . 'h' . 01 AND $heureActuelle <= 16 . 'h' . 00) {
    echo "Bon après-midi!";
} elseif ($heureActuelle >= 16 . 'h' . 01 AND $heureActuelle <= 21 . 'h' . 00) {
    echo "Bonne soirée!";
} elseif ($heureActuelle >= 21 . 'h' . 01 AND $heureActuelle <= 4 . 'h' . 59) {
    echo "Bonne nuit!";
}

?>