<?php
include 'classes.php';

session_start();

if (!isset($_SESSION["tab_etd"])) {
    $_SESSION["tab_etd"] = array();
}

$tab_etudiants = $_SESSION["tab_etd"];
$ident =  $_GET["id"];
echo $ident;

?>

<script>
    // The function below will start the confirmation dialog
    function confirmAction() {
        let confirmAction = confirm("Sauvegarder et quitter?");
        if (confirmAction) {
            document.getElementById("myForm").submit();
        } else {
            // window.location.href = "f3.php";
        }
    }
</script>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>atelier 5</title>
</head>

<body style="border: solid black;">
    <img src="fssm.png" alt="logo du FSSM" style="width: 300px;height: 200px;display: block;margin: auto;">
    <form action="save.php" style="border:solid black;" method="post" id="myForm">
        <div style="padding: 30px;display: inline-block;vertical-align: top;">
            <label for="studentName">Nom de l'Etudiant :</label><br>
            <label for="mathMark">Note Maths :</label><br>
            <label for="infoMark">Note Informatique :</label>
        </div>
        <div style="display: inline-block;padding: 30px; width: 250px;">
            <?php
            if (isset($_GET["id"]) && $_GET["id"] != "null") {
                echo '<input type="text" name="studentName" value="' . $tab_etudiants[$_GET["id"]]->nom . '"/><br>
                    <input type="number" name="mathMark" value="' . $tab_etudiants[$_GET["id"]]->maths . '"><br>
                    <input type="number" name="infoMark" value="' . $tab_etudiants[$_GET["id"]]->info . '"><br>
                    <input type="hidden" name="id" value="' . $_GET["id"] . '">';
            } else {
                echo '<input type="text" name="studentName"/><br>
                    <input type="number" name="mathMark"><br>
                    <input type="number" name="infoMark"><br>
                    <input type="hidden" name="id" value="null">';
            }
            ?>
            <div style="text-align: right;">
                <input type="button" onclick="confirmAction()" value="Annuler" style="margin: 5px;padding:5px ;font-weight:bold; background-color: black;color: white;border-width: 3px;border: solid,black;">
                <input type="submit" value="Valider" style="margin: 5px;padding:5px ;font-weight:bold; background-color: black;color: white;border-width: 3px;border: solid,black;">
            </div>
        </div>
    </form>
</body>

</html>