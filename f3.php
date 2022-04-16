<?php
include 'classes.php';
session_start();

$fichier = fopen("notes.txt", "r") or die("Can not open notes");
$data = file_get_contents("notes.txt");
fclose($fichier);

$tab_etudiants = unserialize($data);



$_SESSION["tab_etd"] = $tab_etudiants;


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>atelier 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <main class="grid sm:mx-20 space-y-2 mt-20 bg-slate-200/20 sm:rounded-md shadow-md shadow-black lg:w-1/2 lg:mx-auto">
        <img src="fssm.png" alt="logo du FSSM" class="w-80 mx-auto bg-slate-200 h-40 my-4 sm:rounded-md shadow-md">

        <div class=" text-white font-medium ">
            <div class=" grid grid-cols-5   space-x-1 py-2 px-2 rounded-t-md">
                <h1 class="col-span-3 pl-8 sm:rounded-tl-md">Liste des étudiants</h1>
                <div>
                    <a href="index.php" class="flex bg-red-500 shadow-md shadow-black/60 space-x-1 py-1 px-2 rounded-md"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M11 15l-3-3m0 0l3-3m-3 3h8M3 12a9 9 0 1118 0 9 9 0 01-18 0z" />
                        </svg><span>Quitter</span></a>
                </div>
                <div class="bg-brand shadow-md shadow-black/60 rounded-md ">

                    <a href="f2.php?id=null" class="px-2 py-1 flex space-x-1 ">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v3m0 0v3m0-3h3m-3 0H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg><span>Nouvau</span></a>
                </div>
            </div>
        </div>
        <div class=" relative overflow-x-auto shadow-md  rounded-b-md">
            <table class="w-full text-sm text-left text-gray-500 text-gray-400">
                <thead class="text-xs bg-slate-200/50 uppercase  text-gray-600">
                    <tr>
                        <th scope="col" class="px-6 py-3 text-center">
                            Nom
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Maths
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            informatique
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            mention
                        </th>
                        <th scope="col" class="px-6 py-3 text-center">
                            Moyen
                        </th>
                        <th scope="col" class="px-6 py-3">

                        </th>
                        <th scope="col" class="px-6 py-3">
                            <span class="sr-only">Edit</span>
                        </th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    foreach ($tab_etudiants as $index => $etudiant) { ?>
                        <tr class="bg-brand/20">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-100  whitespace-nowrap">
                                <?php echo $etudiant->nom; ?>
                            </th>
                            <td class="px-6 py-4 text-gray-100 bg-gray-500/20 text-center">
                                <?php echo $etudiant->maths; ?>

                            </td>
                            <td class="px-6 py-4 text-gray-100 bg-gray-500/30 text-center">
                                <?php echo $etudiant->info; ?>

                            </td>
                            <td class="px-6 py-4 text-gray-100 bg-gray-500/30 text-center">
                                <?php echo $etudiant->mention(); ?>

                            </td>
                            <td class="px-6 py-4 text-gray-100 bg-gray-500/30 text-center">
                                <?php echo $etudiant->avg(); ?>

                            </td>
                            <td class="px-6 py-4">
                                <?php
                                echo '<a href="suppr.php?id=' . $index . '"class="flex justify-center"> <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 text-red-700 hover:text-red-400" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                                    </svg></a>';
                                ?>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <?php
                                echo '<a href="f2.php?id=' . $index . '" class="font-medium text-blue-700 hover:text-blue-500 hover:underline flex justify-center"><svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 " fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                    </svg></a>';
                                ?>
                            </td>
                        </tr>
                    <?php } ?>

                </tbody>
            </table>
        </div>

    </main>


</body>

</html>