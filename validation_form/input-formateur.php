<?php
//On verifie que le user a selectionné quelque chose sinon message obligatoire
if (!empty($propre_formateur)) {
    if (in_array("Conseil Paul", $propre_formateur) || in_array("Richard Lea", $propre_formateur) || in_array("Doumir Jack", $propre_formateur)) {
    } else {
        $error["error"] = "<span class=text-red-500>C'est bizarre, ces valeurs n'existent pas</span>";
    }
} else {
    $error["formateur"] = $errorMessage;
}
