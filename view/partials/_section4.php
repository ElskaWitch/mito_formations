<?php $error = [];
$errorMessage = "<span class='text-red-500'>*Ce champs est obligatoire</span>";
$success = false;
?>

<?php if (!empty($_POST["submited"])) {
    require_once("validation_form/includes-home.php");
    // debug_array($error);

    if (count($error) == 0) {
        $success = true;
        require_once("sql/addFormulaire-sql.php");
    }
} ?>

<?php if (!$success) { ?>
    <div class="text-center ">
        <h1 class=" font-bold text-4xl pt-10 underline ">Formulaire de Contact</h1>
        <form action="" method="POST" class="grid place-items-center bg-gray-100 mx-2 2xl:mx-96 py-10 my-16 gap-y-4 rounded-xl">
            <!--input prenom/nom  -->
            <div class="flex space-x-16">
                <div class="mb-4">
                    <label for="prenom" class="font-semibold ">Prenom</label>
                    <input type="text" name="prenom" class="input input-bordered w-full max-w-xs block" value="<?php
                                                                                                                if (!empty($_POST["prenom"])) {
                                                                                                                    echo $_POST["prenom"];
                                                                                                                } ?>" />
                    <p>
                        <?php
                        if (!empty($error["prenom"])) {
                            echo $error["prenom"];
                        }
                        ?>
                    </p>
                </div>
                <div class="mb-4">
                    <label for="nom" class="font-semibold ">Nom</label>
                    <input type="text" name="nom" class="input input-bordered w-full max-w-xs block" value="<?php
                                                                                                            if (!empty($_POST["nom"])) {
                                                                                                                echo $_POST["nom"];
                                                                                                            } ?>" />
                    <p>
                        <?php
                        if (!empty($error["nom"])) {
                            echo $error["nom"];
                        }
                        ?>
                    </p>
                </div>
            </div>

            <!-- input email -->
            <div class="mb-4">
                <label for="email" class="font-semibold ">Email</label>
                <input type="text" name="email" class="input input-bordered w-full max-w-xs block" value="<?php
                                                                                                            if (!empty($_POST["email"])) {
                                                                                                                echo $_POST["email"];
                                                                                                            } ?>" />
                <p>
                    <?php
                    if (!empty($error["email"])) {
                        echo $error["email"];
                    }
                    ?>
                </p>
            </div>

            <!--input Message  -->
            <div class="mb-4 ">
                <label for="message" class="font-semibold ">Votre message</label>
                <textarea name="message" class="textarea textarea-bordered block"><?php
                                                                                    if (!empty($_POST["message"])) {
                                                                                        echo $_POST["message"];
                                                                                    } ?></textarea>
                <p>
                    <?php
                    if (!empty($error["message"])) {
                        echo $error["message"];
                    }
                    ?>
                </p>
            </div>

            <!-- submit btn -->
            <div class="py-5">
                <input type="submit" name="submited" value="Envoyer" class="btn bg-black">
            </div>
        </form>
    </div>
<?php } else { ?>
    <p class="text-center text-green-500 my-12">Votre message a bien été envoyé !</p>
<?php } ?>