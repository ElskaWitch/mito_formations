<?php
$files_nom = $_FILES["photo"]["name"];
$files_size = $_FILES["photo"]["size"];
$files_tmp = $_FILES["photo"]["tmp_name"];
$files_type = $_FILES["photo"]["type"];


// 2-verifie la taille de l'image
$sizeMax = 2000000; //2mo

if ($files_size <= $sizeMax) {
    $fileInfo = pathinfo($files_nom);
    $extension = $fileInfo["extension"];
    $allowed_extensions = ["jpg", "jpeg", "png"];
    if (in_array($extension, $allowed_extensions)) {
        $new_img_nom = uniqid('IMG-', true) . "." . $extension;
        $img_upload_path = 'uploads/' . $new_img_nom;
        move_uploaded_file($files_tmp, $img_upload_path);
    } else {
        $error["photo"] = "<span class='text-red-500'>Type de fichier incorect (autorisé : jpg, jpeg ou png)</span>";
    }
} else {
    $error["photo"] = "<span class='text-red-500'>Fichier trop lourd (Max 2Mo)</span>";
}
