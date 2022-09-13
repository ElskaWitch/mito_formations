<?php
// tel
if (!empty($tel)) {
    if (strlen($tel) <= 7) {
        $error["tel"] = "<span class=text-red-500>*8 Caractères minimum</span>";
    } elseif (strlen($tel) > 21) {
        $error["tel"] = "<span class=text-red-500>*20 Caractères maximum</span>";
    }
} else {
    $error["tel"] = $errorMessage;
}
