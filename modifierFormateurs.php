<?php
// start session
session_start();
$title = "Add formateurs"; //title for current page
include('partials/_header.php');
include("helpers/functions.php");
// include PDO pour la connexion BDD
require_once("helpers/pdo.php");

$error = [];
$errorMessage = "<span class=text-red-500>*Ce champs est obligatoire</span>";
// variable success
$success = false;

if (!empty($_GET['id']) && is_numeric($_GET['id'])) {
    // 2- je nettoie mon id contre xss
    $id = clear_xss($_GET['id']);
    // 3- faire la query vers BDD
    $sql = "SELECT * FROM formateur WHERE id= :id";
    // 4- Préparation de la query 
    $query = $pdo->prepare($sql);
    // 5- Securise la query contre injection sql
    $query->bindValue(':id', $id, PDO::PARAM_INT);
    // 6 Execute la requête vers la BDD
    $query->execute();
    // 7- On stock tous dans une variable
    $formateur = $query->fetch();

    if (!$formateur) {
        $_SESSION["error"] = "Pas de formateur !";
        header("location: backOffice.php");
    }
} else {
    $_SESSION["error"] = "URL invalide!";
    header("location: index.php");
}

// 2-On envoie vers la BDD
if (!empty($_POST["submited"])) {
    require_once("validation_form/includes-formateurs.php");
    // debug_array($_POST);
    if (count($error) == 0) {
        require_once("sql/modifierFormateurs-sql.php");
    }
}

?>

<section class="py-16">
    <a href="backOffice.php" class="text-blue-500 text-sm">
        <- retour </a>
            <h1 class="text-center text-4xl font-semibold">Ajouter formateur</h1>
            <form action="" method="POST" class="grid place-items-center bg-gray-100 mx-96 py-10 my-16 gap-y-4 rounded-xl" enctype="multipart/form-data">
                <!--input prenom  -->
                <div class="mb-4">
                    <label for="prenom" class="font-semibold text-blue-500">Prenom</label>
                    <input type="text" name="prenom" class="input input-bordered w-full max-w-xs block" value="<?= $formateur["prenom"] ?>" />
                    <p>
                        <?php
                        if (!empty($error["prenom"])) {
                            echo $error["prenom"];
                        }
                        ?>
                    </p>
                </div>

                <!--input nom  -->
                <div class="mb-4">
                    <label for="nom" class="font-semibold text-blue-500">Nom</label>
                    <input type="text" name="nom" class="input input-bordered w-full max-w-xs block" value="<?= $formateur["nom"] ?>" />
                    <p>
                        <?php
                        if (!empty($error["nom"])) {
                            echo $error["nom"];
                        }
                        ?>
                    </p>
                </div>

                <!--input email  -->
                <div class="mb-4">
                    <label for="email" class="font-semibold text-blue-500">Email</label>
                    <input type="text" name="email" class="input input-bordered w-full max-w-xs block" value="<?= $formateur["email"] ?>" />
                    <p>
                        <?php
                        if (!empty($error["email"])) {
                            echo $error["email"];
                        }
                        ?>
                    </p>
                </div>

                <!--input tel  -->
                <div class="mb-4">
                    <label for="tel" class="font-semibold text-blue-500">Telephone</label>
                    <input type="text" name="tel" class="input input-bordered w-full max-w-xs block" value="<?= $formateur["tel"] ?>" />
                    <p>
                        <?php
                        if (!empty($error["tel"])) {
                            echo $error["tel"];
                        }
                        ?>
                    </p>
                </div>

                <!--input adresse  -->
                <div class="mb-4">
                    <label for="adresse" class="font-semibold text-blue-500">Adresse</label>
                    <input type="text" name="adresse" class="input input-bordered w-full max-w-xs block" value="<?= $formateur["adresse"] ?>" />
                    <p>
                        <?php
                        if (!empty($error["adresse"])) {
                            echo $error["adresse"];
                        }
                        ?>
                    </p>
                </div>

                <!--input entrer  -->
                <div class="mb-4">
                    <label for="entrer" class="font-semibold text-blue-500">Entrer en formation</label>
                    <input type="text" name="entrer" class="input input-bordered w-full max-w-xs block" value="<?= $formateur["entrer"] ?>" />
                    <p>
                        <?php
                        if (!empty($error["entrer"])) {
                            echo $error["entrer"];
                        }
                        ?>
                    </p>
                </div>

                <!-- input contrat -->
                <div class="mb-4">
                    <label for="contrat" class="font-semibold text-blue-500">Fin de contrat</label>
                    <input type="text" name="contrat" class="input input-bordered w-full max-w-xs block" value="<?= $formateur["contrat"] ?>" />
                    <p>
                        <?php
                        if (!empty($error["contrat"])) {
                            echo $error["contrat"];
                        }
                        ?>
                    </p>
                </div>


                <!-- checkbox Formation -->
                <?php
                $formationArray = [
                    ["name" => "Cycliste", "checked" => "checked"],
                    ["name" => "Footballeur"],
                    ["name" => "Médecin"],
                    ["name" => "Développeur web"],
                    ["name" => "Designer web"],
                    ["name" => "Technicien informatique"],
                ];
                $arr_formation = explode("|", $formateur["formation"]);
                ?>
                <h2 class="font-semibold text-blue-500 ">Formation</h2>
                <div class="mb-4 flex space-x-6">
                    <?php foreach ($formationArray as $formation) : ?>
                        <div class="flex item-center space-x-3">
                            <label><?= $formation["name"] ?></label>
                            <input type="checkbox" class="checkbox checkbox-primary bg-white" name="formation[]" value="<?= $formation["name"] ?>" <?php if (in_array($formation["name"], $arr_formation)) echo "checked";
                                                                                                                                                    ?> />
                        </div>
                    <?php endforeach ?>
                </div>
                <p>
                    <?php
                    if (!empty($error["formation"])) {
                        echo $error["formation"];
                    }
                    ?>
                </p>



                <!-- upload image -->
                <div class="py-3 text-center">
                    <label for="photo" class="text-blue-500 font-semibold ">Votre image</label>
                    <input type="file" class="block pt-3" id="photo" name="photo">
                    <p>
                        <?php
                        if (!empty($error["photo"])) {
                            echo $error["photo"];
                        }
                        ?>
                    </p>
                </div>

                <input type="hidden" name="id" value="<?= $formateur["id"] ?>">

                <!-- submit btn -->
                <div class="py-5">
                    <input type="submit" name="submited" value="Modifier" class="btn btn-active btn-primary">
                </div>
            </form>
</section>