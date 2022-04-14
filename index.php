<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>atelier 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-slate-600">
    <div class="w-1/3 mx-auto my-40 bg-slate-700 p-8 shadow-gray-900 shadow-[8px_8px_5px]  rounded"> <img src="fssm.png" alt="logo du FSSM" class="w-60 h-28 drop-shadow-xl ">
        <form action="fichphp.php" method="post" class="space-y-3 text-white">
            <div class="grid grid-cols-3">
                <label for="ident" class="uppercase ">identifiant:</label>
                <input type="text" name="ident" class="col-span-2 rounded-md outline text-gray-600 " placeholder="username" />
            </div>
            <div class="grid grid-cols-3">
                <label for="pwd" class="uppercase ">mot de passe:</label>
                <input type="password" name="pwd" class="col-span-2 rounded-md outline text-gray-600" placeholder="password" />
            </div>
            <div>
                <input type="reset" value="Annuler" class="bg-red-500 py-2 px-3 focus:ring-2 focus:ring-red-400 focus:bg-red-700 shadow-md shadow-zinc-900">
                <input type="submit" value="Valider" class="bg-green-600 py-2 px-3 focus:ring-2 focus:ring-green-400 focus:bg-green-800 shadow-md shadow-zinc-900">
            </div>
    </div>
    </form>
    </div>
</body>

</html>