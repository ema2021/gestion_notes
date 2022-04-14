<html>

<head>
    <title>formulaire</title>
</head>

<body>
    <?php
    $s = $_POST["ident"];
    $e = $_POST["pwd"];
    $row = 1;
    $pass = false;
    if (($handle = fopen("login.txt", "r")) !== FALSE) {
        while (($data = fgetcsv($handle, 1000, ",")) !== FALSE) {
            if ($s == $data[0] && $e == $data[1]) {
                $pass = true;
            }
        }
        fclose($handle);
    }
    if ($pass == false) {
        echo "<h3>access denied</h3>";
    } else {
        header('location: f3.php');
    }

    ?>
</body>

</html>