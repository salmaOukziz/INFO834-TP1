<?php
function connexionBdd(){
    try {
        $conn = mysqli_connect("localhost", "root", "");
        mysqli_select_db($conn, "gestion des utilisateurs");
        mysqli_query($conn, "SET NAMES UTF8");
    } catch (Exception $e) {
        echo "Error: " . $e->getMessage();
    }
    return $conn;
}
?>

