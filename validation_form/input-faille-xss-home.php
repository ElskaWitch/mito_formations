<?php
//2-je fais les failles xss
$nom = clear_xss($_POST["nom"]);
$prenom = clear_xss($_POST["prenom"]);
$email = clear_xss($_POST["email"]);
$message = clear_xss($_POST["message"]);
