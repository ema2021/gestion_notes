<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>atelier 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class=" p-4 sm:p-8 ">
    <form action="fichphp.php" method="post" class="mx-10 sm:mx-auto bg-slate-300/30 rounded-2xl shadow-xl shadow-black/30 grid sm:grid-cols-3 lg:w-1/2 mt-40">
        <div class="">
            <img src="fssm.png" alt="logo du FSSM" class=" bg-white/90 h-full rounded-t-2xl sm:rounded-l-2xl w-full sm:rounded-tr-none">

        </div>
        <div class=" py-3 px-5 space-y-3 sm:col-span-2 ">
            <div class="grid space-y-1">
                <label for="ident" class="uppercase">identifiant :</label>
                <input type="text" name="ident" class="bg-slate-100 text-gray-600 rounded-md outline-none border-0 focus:ring-1" placeholder="identifiant" required />
            </div>
            <div class="grid space-y-1">
                <label for=" pwd" class="uppercase">mot de passe:</label>
                <input type="password" name="pwd" class="bg-slate-100 text-gray-600 rounded-md outline-none border-0 focus:ring-1" placeholder="mot de passe" reequired />
            </div>
            <div class="space-x-1">
                <input type="reset" value="Annuler" class="bg-red-500 px-3 py-2 text-white shadow-md shadow-black/60">
                <input type="submit" value="Valider" class="bg-brand px-3 py-2 text-white shadow-md shadow-black/60">
            </div>
        </div>
    </form>
</body>

</html>