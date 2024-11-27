<?php
session_start();
require_once('connect.php');

if (isset($_POST['id'])) {
    $id = intval($_POST['id']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $date = mysqli_real_escape_string($conn, $_POST['date']);
    $value = floatval(str_replace(',', '.', str_replace('.', '', $_POST['value'])));
    $type = mysqli_real_escape_string($conn, $_POST['type']);
    $category = mysqli_real_escape_string($conn, $_POST['category']);

    $sql = "UPDATE transactions SET name='$name', date='$date', value='$value', type='$type', category='$category' WHERE id=$id";

    if (mysqli_query($conn, $sql)) {
        header("Location: ../index.php");
    } else {
        echo "Erro ao atualizar transação: " . mysqli_error($conn);
    }
} else {
    echo "Método inválido.";
    exit();
}
?>
