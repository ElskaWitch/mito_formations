<?php
session_start();
$title = "Formateurs";
include("partials/_header.php");
require_once("helpers/pdo.php");
require_once("sql/selectAllFormateurs-sql.php");
?>

<p class="font-bold text-4xl py-5 underline text-center">Liste des Formateurs</p>

<div class="overflow-x-auto w-auto my-4 mx-4">
    <table class="table w-full">
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
                <th>Contrat</th>
                <th>Formation</th>
                <th>Voir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $index = 1;
            if (count($formateurs) == 0) {
                echo "<tr><td class=text-center>Pas de formateur en ce moment</td></tr>";
            } else { ?>
                <?php foreach ($formateurs as $formateur) : ?>
                    <tr class="">
                        <th class="text-red-500"><?= $index++ ?></th>
                        <td><img src="<?= $formateur['photo'] ?>" alt="" class="w-4"></td>
                        <td class="hover:text-blue-500"><a href="show-formateurs.php?id=<?= $formateur['id'] ?>&nom=<?= $formateur['nom'] ?>"><?= $formateur['nom'] ?></a></td>
                        <td><?= $formateur['prenom'] ?></td>
                        <td><?= $formateur['email'] ?></td>
                        <td><?= $formateur['tel'] ?></td>
                        <td><?= $formateur['adresse'] ?></td>
                        <td><?= $formateur['entrer'] ?></td>
                        <td><?= $formateur['contrat'] ?></td>
                        <td><?= $formateur['formation'] ?></td>
                        <td>
                            <a href="show-formateurs.php?id=<?= $formateur['id'] ?>&nom=<?= $formateur['nom'] ?>">
                                <img src="img/loupe.png" alt="loupe" class="w-4">
                            </a>
                        </td>
                    </tr>
                <?php endforeach ?>
            <?php } ?>

        </tbody>
    </table>
</div>

<!-- footer -->
<?php include('partials/_footer.php') ?>