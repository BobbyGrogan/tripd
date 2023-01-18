<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tripd";

$conn = new mysqli($servername, $username, $password, $dbname);

if (isset($_POST["submit"])){

	$name = htmlspecialchars($_POST["name"]);
    $address = htmlspecialchars($_POST["address"]);
    $attributes = htmlspecialchars($_POST["attributes"]);

    $stmt = "INSERT INTO `places` (`Name`, `Address`, `Attributes`) VALUES ('$name', '$address', '$attributes');";
    $send = $conn->query($stmt);

    header("Location: ../addloc.php");
}

?>