<?php

session_start();

unset($_SESSION["tab_etd"][$_GET["id"]]);

$tab_etudiants = $_SESSION["tab_etd"];
$tab_etudiants = serialize($tab_etudiants);
$fichier = fopen("notes.txt", "w") or die("Can not open notes");
fwrite($fichier, $tab_etudiants);
fclose($fichier);


header('Location: f3.php');
