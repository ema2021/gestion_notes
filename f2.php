<?php
include 'classes.php';

session_start();

if (!isset($_SESSION["tab_etd"])) {
    $_SESSION["tab_etd"] = array();
}

$tab_etudiants = $_SESSION["tab_etd"];
// echo $tab_etudiants[$_GET["id"]];
$ident =  (int)$_GET["id"];

?>

<script>
    // The function below will start the confirmation dialog
    function confirmAction() {
        let confirmAction = confirm("Sauvegarder et quitter?");
        if (confirmAction) {
            document.getElementById("myForm").submit();
        } else {
            window.location.href = "f3.php";
        }
    }
</script>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>atelier 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="bg-slate-200/20  shadow-md shadow-black mt-20 mx-8 rounded-md md:w-2/3 md:mx-auto">
        <form action="save.php" method="post" id="myForm" class="grid sm:grid-cols-3 ">

            <div class="  flex justify-center items-center bg-slate-200 rounded-t-md sm:rounded-l-md sm:rounded-tr-none"><img src="fssm.png" alt="logo du FSSM" class="w-80 h-48 "></div>

            <div class="space-y-2 sm:col-span-2 px-6 py-8">
                <div class="grid ">
                    <?php
                    if (isset($_GET["id"]) && $_GET["id"] != "null") { ?>
                        <label for="studentName">Nom de l'Etudiant :</label>
                        <?php

                        echo '<input type="text" name="studentName" value="' . $tab_etudiants[$_GET["id"]]->nom . '"class="bg-slate-100 text-gray-600 rounded-md outline-none border-0 focus:ring-2 focus:ring-brand focus:shadow-md focus:shadow-brand" placeholder="etudiant"required/>'; ?>
                        <label for="mathMark">Note Maths :</label>
                        <?php
                        echo '<input type="number" name="mathMark" value="' . $tab_etudiants[$_GET["id"]]->maths . '"class="bg-slate-100 text-gray-600 rounded-md outline-none border-0 focus:ring-2 focus:ring-brand focus:shadow-md focus:shadow-brand" placeholder="maths" min="0" max="20"required>'; ?>
                        <label for="infoMark">Note Informatique :</label>
                    <?php
                        echo '<input type="number" name="infoMark" value="' . $tab_etudiants[$_GET["id"]]->info . '"class="bg-slate-100 text-gray-600 rounded-md outline-none border-0 focus:ring-2 focus:ring-brand focus:shadow-md focus:shadow-brand" placeholder="info"min="0" max="20"required>
                    <input type="hidden" name="id" value="' . $_GET["id"] . '">';
                    } else { ?>
                        <label for="studentName">Nom de l'Etudiant :</label>

                        <input type="text" name="studentName" class="bg-slate-100 text-gray-600 rounded-md outline-none border-0 focus:ring-2 focus:ring-brand focus:shadow-md focus:shadow-brand"" placeholder=" etudiant" required />
                        <label for="mathMark">Note Maths :</label>

                        <input type="number" name="mathMark" class="bg-slate-200 text-gray-600 rounded-md outline-none border-0 focus:ring-2 focus:ring-brand focus:shadow-md focus:shadow-brand"" placeholder=" maths" min="0" max="20" required>
                        <label for="infoMark">Note Informatique :</label>

                        <input type="number" name="infoMark" class="bg-slate-200 text-gray-600 rounded-md outline-none border-0 focus:ring-2 focus:ring-brand focus:shadow-md focus:shadow-brand" placeholder="info" min="0" max="20" required>
                        <input type="hidden" name="id" value="null">
                    <?php } ?>

                </div>
                <div>
                    <input type="button" onclick="confirmAction()" value="Annuler" class="bg-red-500 px-3 py-2 text-white shadow-xl">
                    <input type="submit" value="Valider" class="bg-brand px-3 py-2 text-white shadow-xl">
                </div>
            </div>


        </form>
    </main>
</body>

</html>