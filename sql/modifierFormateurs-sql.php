<?php
// 1-Ecriture de la requête
$sql = "UPDATE formateur SET nom = :nom, prenom = :prenom, email = :email, tel = :tel, adresse = :adresse, entrer = :entrer, contrat = :contrat, formation = :formation, photo = :photo WHERE id= :id";

// 2-Préparation requête
$query = $pdo->prepare($sql);

// 3-On associe chaque requête à sa valeur et protection contre injection SQL
$query->bindValue(':id', $id, PDO::PARAM_INT);
$query->bindValue(':nom', $nom, PDO::PARAM_STR);
$query->bindValue(':prenom', $prenom, PDO::PARAM_STR);
$query->bindValue(':email', $email, PDO::PARAM_STR);
$query->bindValue(':tel', $tel, PDO::PARAM_STR);
$query->bindValue(':adresse', $adresse, PDO::PARAM_STR);
$query->bindValue(':entrer', $entrer, PDO::PARAM_STR);
$query->bindValue(':contrat', $contrat, PDO::PARAM_STR);

$query->bindValue(
    ':formation',
    implode("|", $propre_formation),
    PDO::PARAM_STR
);

$query->bindValue(':photo', $photo, PDO::PARAM_STR);


// 4-On execute la requête
$query->execute();

// 5-Redirection
$_SESSION["success"] = "Le formulaire a bien été envoyé";
header("Location: backOffice.php");
