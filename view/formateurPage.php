<?php
$title = "Formateur";
ob_start();
include("partials/formateurPage/_table-formateur.php");

$content = ob_get_clean();
require("layout.php");
