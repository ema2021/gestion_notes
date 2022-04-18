<?php
// require_once 'public_html/pdoconfig.php';

include 'public_html/databaseconnect.php';

$stmt = $conn->query("SELECT * FROM Etudiant");
// echo var_dump($stmt);
$stmt->fetch(PDO::FETCH_ASSOC);
// print_r($result);
// delete a sql row by id   $id = $_GET['id'];  $sql = "DELETE FROM Etudiant WHERE id = $id";
// $conn->exec($sql);
// echo "Record deleted successfully";  $sql = "SELECT * FROM Etudiant";
$id = 53;
$nom = 'test';
$maths = 12;
$info = 12;

function delete($id, $conn)
{
    $sql = "DELETE FROM Etudiant WHERE id = $id";
    $conn->exec($sql);
    // echo "Record deleted successfully";
}
if (isset($_GET['delete'])) {
    delete($_GET["delete"], $conn);
    header('Location: test_db.php');
}
if (isset($_GET['edit'])) {
    alter($_GET["edit"], $conn, $nom, $maths, $info);
    // header('Location: test_db.php');
}
if ($_GET['new']) {
    insert($conn);
    // header('Location: test_db.php');
}

// function to alter a record in database
function alter($id, $conn, $nom, $maths, $info)
{
    $id = $_GET['edit'];
    // update a database Record
    $sql = "UPDATE Etudiant SET nom ='" . $nom . "', maths =" . $maths . ", info=" . $info . " WHERE id = $id";
    $conn->exec($sql);
}
function insert($conn, $nom, $maths, $info)
{
    $sql = "INSERT INTO Etudiant ( nom, maths, info) VALUES ( '" . $nom . "', " . $maths . ", " . $info . " )";
    $conn->exec($sql);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <a href="?new=true" class="px-2 py-1 bg-blue-500">Ajouter</a>
    <table class="w-full text-sm text-left  text-gray-400 sm:w-1/2 mx-auto">
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

            $i = 0;
            while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
                // echo $row['id'] . ' ' . $row['nom'] . ' ' . $row['maths'] . ' ' . $row['info'] . '<br>';
            ?>
                <tr class="bg-brand/20">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-100  whitespace-nowrap">
                        <?php echo $row['nom']; ?>
                    </th>

                    <td class="px-6 py-4 text-gray-100 bg-gray-500/30 text-center">
                        <?php echo $row['info']; ?>

                    </td>
                    <td class="px-6 py-4 text-gray-100 bg-gray-500/30 text-center">
                        <?php echo $row['info']; ?>

                    </td>
                    <td class="px-6 py-4 text-gray-100 bg-gray-500/30 text-center">
                        <?php echo 'pas encore'; ?>

                    </td>
                    <td class="px-6 py-4 text-gray-100 bg-gray-500/20 text-center">
                        <?php echo ($row['maths'] + $row["info"]) / 2; ?>

                    </td>
                    <td class="px-6 py-4">
                        <?php
                        echo '<a href="?edit=' . $row['id'] . '">edit</a>
';
                        ?>
                    </td>
                    <td class="px-6 py-4 text-right">
                        <?php
                        echo '<a href="?delete=' . $row['id'] . '">delete</a>
';
                        ?>
                    </td>
                </tr>

            <?php } ?>
        </tbody>
    </table>
</body>

</html>