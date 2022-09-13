<?php
session_start();
require("models/Formateur.class.php");
$model = new Formateur();
$formateurs = $model->getAll();

require("view/formateurPage.php");
