<?php
session_start();
require_once('connect.php');

if (isset($_POST['add_transaction'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $value = mysqli_real_escape_string($conn, $_POST['value']);
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);
    $month_id = mysqli_real_escape_string($conn, $_POST['month_id']);

    
    $value_without_currency = str_replace('R$', '', $value);
    $value_without_points = str_replace('.', '', $value_without_currency);
    $value = str_replace(',', '.', $value_without_points);

    $value = (float) $value;

    $sql = "INSERT INTO transactions (name, date, value, type, category, month_id) VALUES ('$name', '$date', '$value', '$type', '$category', $month_id)";

    mysqli_query($conn, $sql);

    header('Location: ../historic.php?id=' . $month_id);
    exit();
}

?>
