<?php
include 'public_html/databaseconnect.php';
session_start();
$_SESSION["visited"] = 1;

// $stmt->fetch(PDO::FETCH_ASSOC);
// echo  "\n";

// echo $stmt->result;
$id = 0;
$nom = '';
$maths = '';
$info = '';
if (isset($_GET['edit'])) {
    $stmt = $conn->query("SELECT * FROM Etudiant WHERE id =" . $_GET['edit']);
    // echo var_dump($stmt);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $nom = $row['nom'];
        $maths = $row['maths'];
        $info = $row['info'];
    }
}
// echo $nom;


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
                    if (isset($_GET["edit"])) { ?>
                        <label for="studentName">Nom de l'Etudiant :</label>
                        <?php

                        echo '<input type="text" name="studentName" value="' . $nom . '"class="bg-slate-100 text-gray-600 rounded-md outline-none border-0 focus:ring-2 focus:ring-brand focus:shadow-md focus:shadow-brand" placeholder="etudiant"required/>'; ?>
                        <label for="mathMark">Note Maths :</label>
                        <?php
                        echo '<input type="number" name="mathMark" value="' . $maths . '"class="bg-slate-100 text-gray-600 rounded-md outline-none border-0 focus:ring-2 focus:ring-brand focus:shadow-md focus:shadow-brand" placeholder="maths" min="0" max="20" step=0.01 required>'; ?>
                        <label for="infoMark">Note Informatique :</label>
                    <?php
                        echo '<input type="number" name="infoMark" value="' . $info . '"class="bg-slate-100 text-gray-600 rounded-md outline-none border-0 focus:ring-2 focus:ring-brand focus:shadow-md focus:shadow-brand" placeholder="info"min="0" max="20" step=0.01 required>
                    <input type="hidden" name="edit" value="' . $_GET["edit"] . '">';
                    }
                    if (isset($_GET["new"])) { ?>
                        <label for="studentName">Nom de l'Etudiant :</label>

                        <input type="text" name="studentName" class="bg-slate-100 text-gray-600 rounded-md outline-none border-0 focus:ring-2 focus:ring-brand focus:shadow-md focus:shadow-brand"" placeholder=" etudiant" required />
                        <label for="mathMark">Note Maths :</label>

                        <input type="number" name="mathMark" class="bg-slate-200 text-gray-600 rounded-md outline-none border-0 focus:ring-2 focus:ring-brand focus:shadow-md focus:shadow-brand"" placeholder=" maths" min="0" max="20" required>
                        <label for="infoMark">Note Informatique :</label>

                        <input type="number" name="infoMark" class="bg-slate-200 text-gray-600 rounded-md outline-none border-0 focus:ring-2 focus:ring-brand focus:shadow-md focus:shadow-brand" placeholder="info" min="0" max="20" required>

                    <?php
                        echo "<input type='hidden' name='new' value=''>";
                    } ?>

                </div>
                <div>
                    <input type="button" onclick="confirmAction()" value="Annuler" class="bg-red-500 px-3 py-2 text-white bg-red-500 shadow-md shadow-black/60">
                    <input type="submit" value="Valider" class="bg-brand px-3 py-2 text-white bg-red-500 shadow-md shadow-black/60">
                </div>
            </div>


        </form>
    </main>
</body>

</html>