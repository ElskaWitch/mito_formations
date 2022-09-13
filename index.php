<?php
session_start();
$title = "Homepage";
include("helpers/functions.php");
include("helpers/pdo.php");
include("partials/_header.php");
include("partials/_hero.php");
?>

<?php
include("partials/_section1.php");
include("partials/_section2.php");
include("partials/_section3.php");
include("partials/_section4.php");
?>


<!-- footer -->
<?php include('partials/_footer.php') ?>