<?php
// naissance
if (!empty($naissance)) {
    if (strlen($naissance) <= 7) {
        $error["naissance"] = "<span class=text-red-500>*8 Caractères minimum</span>";
    } elseif (strlen($naissance) > 21) {
        $error["naissance"] = "<span class=text-red-500>*20 Caractères maximum</span>";
    }
} else {
    $error["naissance"] = $errorMessage;
}
