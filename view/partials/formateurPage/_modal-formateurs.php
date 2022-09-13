<!-- The button to open modal -->
<label for="<?= $formateur["id"] ?>" class="btn modal-button bg-red-700">Supprimer</label>

<!-- Put this part before </body> tag -->
<input type="checkbox" id="<?= $formateur["id"] ?>" class="modal-toggle" />
<div class="modal">
    <div class="modal-box">
        <h3 class="font-bold text-lg text-center">Voulez-vous vraiment supprimer ce formateur ?</h3>

        <div class="flex justify-center space-x-5 pt-5">
            <div class="modal-action">
                <label for="<?= $formateur["id"] ?>" class="btn">Non</label>
            </div>
            <div class="modal-action">
                <label for="<?= $formateur["id"] ?>" class="btn btn-primary"><a href="deleteFormateurs.php?id=<?= $formateur["id"] ?>&nom=<?= $formateur["nom"] ?>">Oui</a></label>
            </div>
        </div>
    </div>
</div>