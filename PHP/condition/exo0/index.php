<?php
    $chambre_est_sale = "sale";
    if($chambre_est_sale == "deg") {
        echo "Range ta chambre, on dirait la cage d'un bonobo!";
    } elseif ($chambre_est_sale == "dégoutante") {
        echo "Ta chambre est trop propre, vis un peu!";
    }  elseif ($chambre_est_sale == "sale") {
        echo "trop sale quoi";
    } elseif ($chambre_est_sale == "En ordre") {
        echo "ta chambre est en ordre";
    } elseif ($chambre_est_sale == "manique") {
        echo "ta chambre est super duper propre";
    } else {
        echo "nothing";
    }
?>