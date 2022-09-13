<?php
session_start();
$title = "Stagiaires";
include("partials/_header.php");
include("helpers/functions.php");
require_once("helpers/pdo.php");

if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = clear_xss($_GET['id']);
    $sql = "SELECT * FROM stagiaires WHERE id= :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $stagiaire = $query->fetch();

    if (!$stagiaire) {
        $_SESSION["error"] = "Ce stagiaire n'existe pas !";
        header("Location: stagiaires.php");
    }
} else {
    $_SESSION["error"] = "URL invalide!";
    header("Location: index.php");
}
?>
<a href="stagiaires.php" class="text-pink-400 text-sm mb-32">
    <- Retour</a>
        <div class="pt-4 text-center">
            <h1 class="text-blue-500 text-5xl font-black mt-12"><?= $stagiaire["prenom"] ?> <?= $stagiaire["nom"] ?></h1>
            <?php
            if ($stagiaire["photo"] != null) { ?>
                <img src="<?= $stagiaire["photo"] ?>" alt="<?= $stagiaire["nom"] ?>" class="w-16 h-16 my-12 mx-auto">
            <?php } ?>
            <div class="">
                <p class="font-bold text-lg">E-mail : <span class="font-medium text-blue-500"><?= $stagiaire["email"] ?></span></p>
                <p class="font-bold text-lg">N° Tel : <span class="font-medium text-blue-500"><?= $stagiaire["tel"] ?></span></p>
                <p class="font-bold text-lg">Adresse : <span class="font-medium text-blue-500"><?= $stagiaire["adresse"] ?></span></p>
                <p class="font-bold text-lg">Entrée en formation : <span class="font-medium text-blue-500"><?= $stagiaire["entrer"] ?></span></p>
                <p class="font-bold text-lg">Date de n. : <span class="font-medium text-blue-500"><?= $stagiaire["naissance"] ?></span></p>
                <p class="font-bold text-lg">Formation : <span class="font-medium text-blue-500"><?= $stagiaire["formation"] ?></span></p>
                <p class="font-bold text-lg">Formateur : <span class="font-medium text-blue-500"><?= $stagiaire["formateur"] ?></span></p>

            </div>
        </div>



        <!-- footer -->
        <?php include('partials/_footer.php') ?>