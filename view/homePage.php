<?php
$title = "Homepage";
ob_start();
include("partials/homePage/_hero.php");
include("partials/homePage/_section1.php");
include("partials/homePage/_section2.php");
include("partials/homePage/_section3.php");
include("partials/homePage/_section4.php");

$content = ob_get_clean();
require("layout.php");
