<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <title>atelier 5</title>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-slate-900">
    <div class="w-2/3 mx-auto my-40"> <img src="fssm.png" alt="logo du FSSM" class="w-80">
        <form action="fichphp.php" method="post" class="text-gray-200">
            <div>
                <label for="ident" class="uppercase">identifiant:</label><br>
                <label for="pwd" class="uppercase">mot de passe:</label>
            </div>
            <div>
                <input type="text" name="ident" />
                <input type="password" name="pwd">
                <div>
                    <input type="reset" value="Annuler" style="margin: 5px;padding:5px ;font-weight:bold; background-color: black;color: white;border-width: 3px;border: solid,black;">
                    <input type="submit" value="Valider" style="margin: 5px;padding:5px ;font-weight:bold; background-color: black;color: white;border-width: 3px;border: solid,black;">
                </div>
            </div>
        </form>
    </div>
</body>

</html>