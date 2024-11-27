<?php
session_start();
require_once('actions/connect.php');

if (isset($_GET['id'])) {
    $transaction_id = intval($_GET['id']);

    $sql = "SELECT * FROM transactions WHERE id = $transaction_id";
    $result = mysqli_query($conn, $sql);

    if ($result && mysqli_num_rows($result) > 0) {
        $transaction = mysqli_fetch_assoc($result);
    } else {
        echo "Transação não encontrada.";
        exit();
    }
} else {
    echo "ID da transação não especificado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Transação</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-zinc-50 text-zinc-950 antialiased">
    <div class="container mx-auto p-4 space-y-4">
        <h1 class="text-2xl font-bold">Editar Transação</h1>

        <form action="actions/update.php" method="POST" class="space-y-4">
            <input type="hidden" name="id" value="<?= $transaction['id']; ?>">

            <div>
                <label for="name" class="block text-sm font-medium">Nome</label>
                <input type="text" name="name" value="<?= $transaction['name']; ?>" class="w-full px-3 py-2 border rounded" required>
            </div>

            <div>
                <label for="date" class="block text-sm font-medium">Data</label>
                <input type="date" name="date" value="<?= $transaction['date']; ?>" class="w-full px-3 py-2 border rounded" required>
            </div>

            <div>
                <label for="value" class="block text-sm font-medium">Valor</label>
                <input type="text" name="value" value="<?= $transaction['value']; ?>" class="w-full px-3 py-2 border rounded" required>
            </div>

            <div>
                <label for="type" class="block text-sm font-medium">Tipo</label>
                <select name="type" class="w-full px-3 py-2 border rounded" required>
                    <option value="Entrada" <?= $transaction['type'] == 'Entrada' ? 'selected' : ''; ?>>Entrada</option>
                    <option value="Saida" <?= $transaction['type'] == 'Saida' ? 'selected' : ''; ?>>Saída</option>
                </select>
            </div>

            <div>
                <label for="category" class="block text-sm font-medium">Categoria</label>
                <select name="category" class="w-full px-3 py-2 border rounded" required>
                    <option value="Alimentação" <?= $transaction['category'] == 'Alimentação' ? 'selected' : ''; ?>>Alimentação</option>
                    <option value="Transporte" <?= $transaction['category'] == 'Transporte' ? 'selected' : ''; ?>>Transporte</option>
                    <option value="Lazer" <?= $transaction['category'] == 'Lazer' ? 'selected' : ''; ?>>Lazer</option>
                    <option value="Salario" <?= $transaction['category'] == 'Salario' ? 'selected' : ''; ?>>Salário</option>
                </select>
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded">Salvar Alterações</button>
        </form>
    </div>
</body>

</html>
