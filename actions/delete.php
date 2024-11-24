<?php
session_start();
require_once('connect.php');

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $sql = "DELETE FROM transactions WHERE id = $id";
    mysqli_query($conn, $sql);
    header('Location: ../historic.php?id=' . $id);
    exit();
}
?>
