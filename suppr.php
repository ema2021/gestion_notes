<?php

session_start();

function delete($id, $conn)
{
    $sql = "DELETE FROM Etudiant WHERE id = $id";
    $conn->exec($sql);
    // echo "Record deleted successfully";
}
if (isset($_GET['delete'])) {
    delete($_GET["delete"], $conn);
    header('Location: f3.php');
}
