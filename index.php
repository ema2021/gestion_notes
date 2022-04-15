<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>atelier 3</title>
</head>

<body style="border: solid black;">
    <img src="fssm.png" alt="logo du FSSM" style="width: 300px;height: 200px;display: block;margin: auto;">
    <form action="fichphp.php" style="border:solid black;" method="post">
        <div style="padding: 30px;display: inline-block;vertical-align: top;">
            <label for="ident">identifiant:</label><br>
            <label for="pwd">mot de passe:</label>
        </div>
        <div style="display: inline-block;padding: 30px; width: 250px;">
            <input type="text" name="ident" /><br>
            <input type="password" name="pwd"><br>
            <div style="text-align: right;">
                <input type="reset" value="Annuler" style="margin: 5px;padding:5px ;font-weight:bold; background-color: black;color: white;border-width: 3px;border: solid,black;">
                <input type="submit" value="Valider" style="margin: 5px;padding:5px ;font-weight:bold; background-color: black;color: white;border-width: 3px;border: solid,black;">
            </div>
        </div>
    </form>
</body>

</html>