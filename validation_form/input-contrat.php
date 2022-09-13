<?php
// contrat
if (!empty($contrat)) {
    if (strlen($contrat) <= 7) {
        $error["contrat"] = "<span class=text-red-500>*8 Caractères minimum</span>";
    } elseif (strlen($contrat) > 21) {
        $error["contrat"] = "<span class=text-red-500>*20 Caractères maximum</span>";
    }
} else {
    $error["contrat"] = $errorMessage;
}
