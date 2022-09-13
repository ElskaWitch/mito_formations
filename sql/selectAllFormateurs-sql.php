<?php
$sql = "SELECT * FROM formateur";
$query = $pdo->prepare($sql);
$query->execute();
$formateurs = $query->fetchAll();
