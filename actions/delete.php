<?php
session_start();
require_once('connect.php');

if (isset($_POST['transaction_id']) && isset($_POST['month_id'])) {
    $transaction_id = $_POST['transaction_id'];
    
    $sql = "DELETE FROM transactions WHERE id = $transaction_id";
    mysqli_query($conn, $sql);

    $month_id = $_POST['month_id'];
    header('Location: ../historic.php?id=' . $month_id);
    exit();
}
?>