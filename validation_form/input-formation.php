<?php
//On verifie que le user a selectionné quelque chose sinon message obligatoire
if (!empty($propre_formation)) {
    if (in_array("Cycliste", $propre_formation) || in_array("Footballeur", $propre_formation) || in_array("Médecin", $propre_formation) ||  in_array("Développeur web", $propre_formation) || in_array("Designer web", $propre_formation) || in_array("Technicien informatique", $propre_formation)) {
    } else {
        $error["error"] = "<span class=text-red-500>C'est bizarre, ces valeurs n'existent pas</span>";
    }
} else {
    $error["formation"] = $errorMessage;
}
