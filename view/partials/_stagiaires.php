<?php
require_once("helpers/pdo.php");
include("helpers/functions.php");
require_once("sql/selectAllStagiaires-sql.php");
?>
<div class="overflow-x-auto max-w-screen-lg pt-20 mr-12 ">
    <table class="table w-auto ">
        <!-- head -->
        <thead>
            <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>E-mail</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Entrée</th>
                <th>DoB</th>
                <th>Formation</th>
                <th>Formateur</th>
                <th>Voir</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $index = 1;
            if (count($stagiaires) == 0) {
                echo "<tr><td class=text-center>Pas de stagiaire en ce moment</td></tr>";
            } else { ?>
                <?php foreach ($stagiaires as $stagiaire) : ?>
                    <tr class="">
                        <th class="text-red-500"><?= $index++ ?></th>
                        <td><img src="<?= $stagiaire['photo'] ?>" alt="" class="w-4"></td>
                        <td class="hover:text-blue-500"><a href="show-stagiaires.php?id=<?= $stagiaire['id'] ?>&nom=<?= $stagiaire['nom'] ?>"><?= $stagiaire['nom'] ?></a></td>
                        <td><?= $stagiaire['prenom'] ?></td>
                        <td><?= $stagiaire['email'] ?></td>
                        <td><?= $stagiaire['tel'] ?></td>
                        <td><?= $stagiaire['adresse'] ?></td>
                        <td><?= $stagiaire['entrer'] ?></td>
                        <td><?= $stagiaire['naissance'] ?></td>
                        <td><?= $stagiaire['formation'] ?></td>
                        <td><?= $stagiaire['formateur'] ?></td>
                        <td>
                            <a href="show-stagiaires.php?id=<?= $stagiaire['id'] ?>&nom=<?= $stagiaire['nom'] ?>">
                                <img src="img/loupe.png" alt="loupe" class="w-4">
                            </a>
                        </td>
                        <td><a href="modifierStagiaires.php?id=<?= $stagiaire["id"] ?>&nom=<?= $stagiaire["nom"] ?>" class="btn btn-success text-white">Modifier</a></td>
                        <td><?php include("partials/_modal-stagiaires.php") ?></td>
                    </tr>
                <?php endforeach ?>
            <?php } ?>

        </tbody>
        <!-- foot -->
        <tfoot>
            <tr>
                <th>#</th>
                <th>Photo</th>
                <th>Nom</th>
                <th>Prénom</th>
                <th>E-mail</th>
                <th>Téléphone</th>
                <th>Adresse</th>
                <th>Entrée</th>
                <th>DoB</th>
                <th>Formation</th>
                <th>Formateur</th>
                <th>Voir</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>
        </tfoot>
    </table>
</div>