<?php
// // message
if (!empty($message)) {
    if (strlen($message) <= 25) {
        $error["message"] = "<span class=text-red-500>*25 Caractères minimum</span>";
    } elseif (strlen($message) > 500) {
        $error["message"] = "<span class=text-red-500>*500 Caractères maximum</span>";
    }
} else {
    $error["message"] = $errorMessage;
}
