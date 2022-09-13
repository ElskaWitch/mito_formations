<?php
//1- Query to get all games
$sql = "SELECT * FROM stagiaires";
//2- Prépare la query (preformatter)
$query = $pdo->prepare($sql);
//3 - Execute ma requête
$query->execute();
//4 - stock my query in variable
$stagiaires = $query->fetchAll();
?>