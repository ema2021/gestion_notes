<?php
include 'public_html/databaseconnect.php';

session_start();
$_SESSION["visited"] = 1;


// $stmt = $conn->query("SELECT * FROM Etudiant WHERE id =" . $_GET['edit']);
// echo var_dump($stmt);
// $stmt->fetch(PDO::FETCH_ASSOC);
// echo var_dump($stmt);
echo  "\n";
// echo $stmt->result;
$id = 0;
$nom = '';
$maths = '';
$info = '';
if (isset($_GET['edit']) && !$_GET['edit']) {
    $stmt = $conn->query("SELECT * FROM Etudiant WHERE id =" . $_GET['edit']);
    echo var_dump($stmt);

    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        $id = $row['id'];
        $nom = $row['nom'];
        $maths = $row['maths'];
        $info = $row['info'];
    }
    echo "\n debug";
}

$nom = $_POST["studentName"];
$maths = $_POST["mathMark"];
$info = $_POST["infoMark"];
$id = $_POST["edit"];
echo $id . "\n";
echo $nom;
if (isset($_POST['edit'])) {
    echo "debughhhh";
    alter($id, $conn, $nom, $maths, $info);
    header('Location:f3.php');
}
if (isset($_POST['new'])) {
    insert($conn, $nom, $maths, $info);
    header('Location: f3.php');
}

// function to alter a record in database
function alter($id, $conn, $nom, $maths, $info)
{
    // $id = $_GET['edit'];
    // update a database Record
    $sql = "UPDATE Etudiant SET nom ='" . $nom . "', maths =" . $maths . ", info=" . $info . " WHERE id = $id";
    $conn->exec($sql);
}
function insert($conn, $nom, $maths, $info)
{
    $sql = "INSERT INTO Etudiant ( nom, maths, info) VALUES ( '" . $nom . "', " . $maths . ", " . $info . " )";
    $conn->exec($sql);
}






// header('Location: f3.php');
