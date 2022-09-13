<?php
// entrer
if (!empty($entrer)) {
    if (strlen($entrer) <= 7) {
        $error["entrer"] = "<span class=text-red-500>*8 Caractères minimum</span>";
    } elseif (strlen($entrer) > 21) {
        $error["entrer"] = "<span class=text-red-500>*20 Caractères maximum</span>";
    }
} else {
    $error["entrer"] = $errorMessage;
}
