<?php
include 'classes.php';
session_start();

if (!isset($_SESSION["tab_etd"])) {
    $_SESSION["tab_etd"] = array();
}
$nom = $_POST["studentName"];
$maths = $_POST["mathMark"];
$info = $_POST["infoMark"];
if ($_POST['id'] != "null") {
    $etd = new Etudiant($nom, $maths, $info);
    // echo $etd . "<br/>";
    $_SESSION["tab_etd"][$_POST["id"]] = $etd;
} else {
    $etd = new Etudiant($nom, $maths, $info);

    // echo $etd . " null" . "<br/>";
    array_push($_SESSION["tab_etd"], $etd);
}
// foreach ($_SESSION["tab_etd"] as $key => $value) {
//     echo $value . "<br/>";
// }

$tab_etudiants = $_SESSION["tab_etd"];
$tab_etudiants = serialize($tab_etudiants);
echo $tab_etudiants;
$fichier = fopen("notes.txt", "w") or die("Can not open notes");
fwrite($fichier, $tab_etudiants);
fclose($fichier);


header('Location: f3.php');
