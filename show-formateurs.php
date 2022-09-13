<?php
session_start();
$title = "Formateur";
include("partials/_header.php");
include("helpers/functions.php");
require_once("helpers/pdo.php");

if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
    $id = clear_xss($_GET['id']);
    $sql = "SELECT * FROM formateur WHERE id= :id";
    $query = $pdo->prepare($sql);
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    $query->execute();
    $formateur = $query->fetch();

    if (!$formateur) {
        $_SESSION["error"] = "Ce formateur n'existe pas !";
        header("Location: formateurs.php");
    }
} else {
    $_SESSION["error"] = "URL invalide!";
    header("Location: index.php");
}
?>
<a href="formateurs.php" class="text-pink-400 text-sm mb-32">
    <- Retour</a>
        <div class="pt-4 text-center">
            <h1 class="text-blue-500 text-5xl font-black mt-12"><?= $formateur["prenom"] ?> <?= $formateur["nom"] ?></h1>
            <?php
            if ($formateur["photo"] != null) { ?>
                <img src="<?= $formateur["photo"] ?>" alt="<?= $formateur["nom"] ?>" class="w-16 h-16 my-12 mx-auto">
            <?php } ?>
            <div class="">
                <p class="font-bold text-lg">E-mail : <span class="font-medium text-blue-500"><?= $formateur["email"] ?></span></p>
                <p class="font-bold text-lg">N° Tel : <span class="font-medium text-blue-500"><?= $formateur["tel"] ?></span></p>
                <p class="font-bold text-lg">Adresse : <span class="font-medium text-blue-500"><?= $formateur["adresse"] ?></span></p>
                <p class="font-bold text-lg">Entrée en formation : <span class="font-medium text-blue-500"><?= $formateur["entrer"] ?></span></p>
                <p class="font-bold text-lg">Contrat : <span class="font-medium text-blue-500"><?= $formateur["contrat"] ?></span></p>
                <p class="font-bold text-lg">Formation : <span class="font-medium text-blue-500"><?= $formateur["formation"] ?></span></p>


            </div>
        </div>



        <!-- footer -->
        <?php include('partials/_footer.php') ?>