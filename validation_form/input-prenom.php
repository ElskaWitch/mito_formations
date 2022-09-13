<?php
// prenom
if (!empty($prenom)) {
    if (strlen($prenom) <= 2) {
        $error["prenom"] = "<span class=text-red-500>*3 Caractères minimum</span>";
    } elseif (strlen($prenom) > 100) {
        $error["prenom"] = "<span class=text-red-500>*100 Caractères maximum</span>";
    }
} else {
    $error["prenom"] = $errorMessage;
}
