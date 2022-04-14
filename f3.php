<?php
include 'classes.php';
session_start();

$fichier = fopen("notes.txt", "r") or die("Can not open notes");
$data = file_get_contents("notes.txt");
// echo $data . "<br/>";
fclose($fichier);
// $tab_etudiants = new stdClass();

$tab_etudiants = unserialize($data);



$_SESSION["tab_etd"] = $tab_etudiants;

function mention($note)
{
    if ($note < 10) {
        return 'Mauvais';
    }
    if ($note < 12) {
        return 'Assez Bien';
    }
    if ($note < 15) {
        return 'Bien';
    }
    if ($note < 18) {
        return 'Très bien';
    }
    return 'Excellent';
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>atelier 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body style="border: solid black;">
    <img src="fssm.png" alt="logo du FSSM" style="width: 300px;height: 200px;display: block;margin: auto;">
    <div style="text-align: right;">
        <a href="index.php"><input type="button" value="Quitter" style="margin: 5px;padding:5px ;font-weight:bold; background-color: black;color: white;border-width: 3px;border: solid,black;">
        </a>
        <a href="f2.php?id=null"><input type="button" value="Nouveau" style="margin: 5px;padding:5px ;font-weight:bold; background-color: black;color: white;border-width: 3px;border: solid,black;">
        </a>
    </div>
    <div style="border: 1px solid #000; width: 100px; height:25px; text-align: center; color: red; display: inline-block;">Nom</div>
    <div style="border: 1px solid #000; width: 100px; height:25px; text-align: center; color: red; display: inline-block;">Maths
    </div>
    <div style="border: 1px solid #000; width: 100px; height:25px; text-align: center; color: red; display: inline-block;">
        Informatique</div>
    <div style="border: 1px solid #000; width: 100px; height:25px; text-align: center; color: red; display: inline-block;">Moyenne
    </div>
    <div style="border: 1px solid #000; width: 100px; height:25px; text-align: center; color: red; display: inline-block;">Mention
    </div>

    <?php
    foreach ($tab_etudiants as $index => $element) {
        echo '<br><div style="border: 1px solid #000; width: 100px; height:25px; text-align: center; display: inline-block;">' . $element->nom . '</div>
            <div style="border: 1px solid #000; width: 100px; height:25px; text-align: center;display: inline-block;">' . $element->maths . '
            </div>
            <div style="border: 1px solid #000; width: 100px; height:25px; text-align: center;display: inline-block;">
                ' . $element->info . '</div>
            <div style="border: 1px solid #000; width: 100px; height:25px; text-align: center; display: inline-block;">' . $element->avg() . '
            </div>
            <div style="border: 1px solid #000; width: 100px; height:25px; text-align: center; display: inline-block;">' . $element->mention() . '
            </div>
            <a href="f2.php?id=' . $index . '"><input type="button" value="M"
                style="margin: 5px;padding:5px ;font-weight:bold; background-color: black;color: white;border-width: 3px;border: solid,black;">
            </a>
            <a href="suppr.php?id=' . $index . '"><input type="button" value="S"
                style="margin: 5px;padding:5px ;font-weight:bold; background-color: black;color: white;border-width: 3px;border: solid,black;">
            </a>';
    }
    ?>

    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Product name
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Color
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Category
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Price
                    </th>
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($tab_etudiants as $index => $value) : ?>
                    <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                        <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                            
                        </th>
                        <td class="px-6 py-4">
                            Sliver
                        </td>
                        <td class="px-6 py-4">
                            Laptop
                        </td>
                        <td class="px-6 py-4">
                            $2999
                        </td>
                        <td class="px-6 py-4 text-right">
                            <a href="#" class="font-medium text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

</body>

</html>