<?php
// adresse
if (!empty($adresse)) {
    if (strlen($adresse) <= 9) {
        $error["adresse"] = "<span class=text-red-500>*10 Caractères minimum</span>";
    } elseif (strlen($adresse) > 21) {
        $error["adresse"] = "<span class=text-red-500>*20 Caractères maximum</span>";
    }
} else {
    $error["adresse"] = $errorMessage;
}
