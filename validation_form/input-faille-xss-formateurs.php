<?php
//2-je fais les failles xss
$nom = clear_xss($_POST["nom"]);
$prenom = clear_xss($_POST["prenom"]);
$email = clear_xss($_POST["email"]);
$tel = clear_xss($_POST["tel"]);
$adresse = clear_xss($_POST["adresse"]);
$entrer = clear_xss($_POST["entrer"]);
$contrat = clear_xss($_POST["contrat"]);

$sale_formation = !empty($_POST["formation"]) ? $_POST["formation"] : [];
// je crée un nouveau tableau pour les elements nettoyer
$propre_formation = [];
foreach ($sale_formation as $linge_sale) {
    // je lave chaque element et je l'insere dans le nouveau tableau
    $propre_formation[] = clear_xss($linge_sale);
};

$photo = $img_upload_path;

