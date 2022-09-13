<?php
// nom
if (!empty($nom)) {
    if (strlen($nom) <= 2) {
        $error["nom"] = "<span class=text-red-500>*3 Caractères minimum</span>";
    } elseif (strlen($nom) > 100) {
        $error["nom"] = "<span class=text-red-500>*100 Caractères maximum</span>";
    }
} else {
    $error["nom"] = $errorMessage;
}
