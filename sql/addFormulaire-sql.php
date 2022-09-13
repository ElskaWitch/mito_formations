<?php
// 1-Ecriture de la requête
$sql = "INSERT INTO formulaire(prenom, nom, email, message) VALUES(:prenom, :nom, :email, :message)";

// 2-Préparation requête
$query = $pdo->prepare($sql);

// 3-On associe chaque requête à sa valeur et protection contre injection SQL
$query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
$query->bindValue(':nom', $nom, PDO::PARAM_STR);
$query->bindValue(':email', $email, PDO::PARAM_STR);
$query->bindValue(':message', $message, PDO::PARAM_STR);

// 4-On execute la requête
$query->execute();

// 5-Redirection
// $_SESSION["success"] = "Le formulaire a bien été envoyé";
// header("Location: index.php");?>
