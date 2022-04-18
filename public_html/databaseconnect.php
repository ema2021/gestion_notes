<?php
require_once 'public_html/pdoconfig.php';

try {
    $conn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);

    if ($_SESSION["visited"] != 1) {
        echo "
    <div class='bg-green-300 text-center px-2 py-1'>
        <strong>Success!</strong> Connected to $dbname at $host successfully."; ?>
        <button class='text-red-500 float-right ' onclick="this.parentElement.style.display='none';">close</button><?php
                                                                                                                    echo "</div>";
                                                                                                                    $_SESSION["visited"] = 1;
                                                                                                                }
                                                                                                            } catch (PDOException $pe) {
                                                                                                                die("Could not connect to the database  $dbname :" . $pe->getMessage());
                                                                                                            }
