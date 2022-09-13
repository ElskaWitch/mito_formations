<?php
// email
if (!empty($email)) {
    if (strlen($email) <= 9) {
        $error["email"] = "<span class=text-red-500>*10 Caractères minimum</span>";
    } elseif (strlen($email) > 100) {
        $error["email"] = "<span class=text-red-500>*100 Caractères maximum</span>";
    }
} else {
    $error["email"] = $errorMessage;
}
