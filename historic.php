<?php
session_start();
require_once('actions/connect.php');

if (isset($_GET['id'])) {
    $month_id = intval($_GET['id']);

    $sql = "SELECT * FROM transactions WHERE month_id = $month_id";
    $result = mysqli_query($conn, $sql);

    $totalIncome = 0;
    $totalExpense = 0;
    $finalBalance = 0;

    $transactions = [];
    if ($result && mysqli_num_rows($result) > 0) {
        while ($row = mysqli_fetch_assoc($result)) {
            $transactions[] = $row; 
            
            if ($row['type'] === 'Entrada') {
                $totalIncome += $row['value'];
            } elseif ($row['type'] === 'Saida') {
                $totalExpense += $row['value'];
            }
        }
        $finalBalance = $totalIncome - $totalExpense;
    }

} else {
    echo "ID do mês não especificado.";
    exit();
}
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Histórico de transações</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-zinc-50 text-zinc-950 antialiased">

    <div class="container mx-auto p-4 space-y-4">

        <!-- Header -->
        <div class="flex justify-between items-center">
            <a href="index.php" class="bg-rose-500 hover:bg-rose-600 text-white font-semibold py-2 px-4 rounded flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-corner-down-left"><polyline points="9 10 4 15 9 20"/><path d="M20 4v7a4 4 0 0 1-4 4H4"/></svg>
                Voltar
            </a>
            <h1 class="text-2xl font-bold w-auto ml-28">Histórico de transações</h1>
            <button id="openModalButton" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
                    <path d="M5 12h14" />
                    <path d="M12 5v14" />
                </svg>
                Cadastrar transação
            </button>
        </div>

        <div class="mb-8 border rounded-xl shadow bg-white">
            <div class="border-b p-4">
                <h2 class="font-bold">Resumo Mensal</h2>
            </div>
            <div class="p-4 grid grid-cols-1 md:grid-cols-3 gap-4">
                <!-- Total Ganho -->
                <div class="flex items-center justify-between p-4 bg-green-100 rounded-lg transition-all duration-300 hover:scale-105">
                    <div>
                        <p class="text-sm font-medium text-green-800">Total Ganho</p>
                        <p class="text-2xl font-bold text-green-900">
                            R$ <?= number_format($totalIncome, 2, ',', '.') ?>
                        </p>
                    </div>
                    <svg class="h-8 w-8 text-green-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m5 12 7-7 7 7" />
                        <path d="M12 19V5" />
                    </svg>
                </div>

                <!-- Total Gasto -->
                <div class="flex items-center justify-between p-4 bg-red-100 rounded-lg transition-all duration-300 hover:scale-105">
                    <div>
                        <p class="text-sm font-medium text-red-800">Total Gasto</p>
                        <p class="text-2xl font-bold text-red-900">
                            R$ <?= number_format($totalExpense, 2, ',', '.') ?>
                        </p>
                    </div>
                    <svg class="h-8 w-8 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 5v14" />
                        <path d="m19 12-7 7-7-7" />
                    </svg>
                </div>

                <!-- Saldo Final -->
                <div class="flex items-center justify-between p-4 bg-blue-100 rounded-lg transition-all duration-300 hover:scale-105">
                    <div>
                        <p class="text-sm font-medium text-blue-800">Saldo Final</p>
                        <p class="text-2xl font-bold text-blue-900">
                            R$ <?= number_format($finalBalance, 2, ',', '.') ?>
                        </p>
                    </div>
                    <svg class="h-8 w-8 text-blue-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <line x1="12" x2="12" y1="2" y2="22" />
                        <path d="M17 5H9.5a3.5 3.5 0 0 0 0 7h5a3.5 3.5 0 0 1 0 7H6" />
                    </svg>
                </div>
            </div>
        </div>

        <!-- CARD DA TABELA -->
        <div class="rounded-xl border bg-card shadow">
            <div class="flex flex-col space-y-1.5 p-6">
                <div class="font-semibold leading-none tracking-tight">Histórico de transações</div>
                <div class="text-sm">Histórico de transações</div>
            </div>
            <div class="p-6 pt-0">
                <!-- TABELA -->
                <table class="w-full caption-bottom text-sm">
                    <!-- HEADER TABELA -->
                    <thead class="[&_tr]:border-b">
                        <tr class="border-b transition-colors hover:bg-muted/50">
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">ID</th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">Nome / Descrição</th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">Categoria</th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">Tipo</th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">Valor</th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">Data</th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium w-36"></th>
                        </tr>
                    </thead>

                    <!-- BODY -->
                    <tbody class="[&_tr:last-child]:border-0">
                        <!-- DADOS -->
                        <?php if (!empty($transactions)): ?>
                            <?php foreach ($transactions as $transaction): ?>
                                <tr class="border-b transition-colors hover:bg-zinc-200 my-2">
                                    <td class="h-10 px-2 py-4 text-left align-middle font-medium"><?= $transaction['id']; ?></td>
                                    <td class="h-10 px-2 py-4 text-left align-middle font-medium"><?= $transaction['name']; ?></td>
                                    <td class="h-10 px-2 py-4 text-left align-middle font-medium"><?= $transaction['category']; ?></td>
                                    <td class="h-10 px-2 py-4 text-left align-middle font-medium">
                                        <span class="<?= $transaction['type'] === 'Saida' ? 'text-zinc-50 bg-red-600 py-1 px-2 rounded' : 'text-zinc-50 bg-emerald-600 py-1 px-2 rounded'; ?>">
                                            <?= strtoupper($transaction['type']); ?>
                                        </span>
                                    </td>
                                    <td class="h-10 px-2 py-4 text-left align-middle font-medium">
                                        R$ <?= number_format($transaction['value'], 2, ',', '.'); ?>
                                    </td>
                                    <td class="h-10 px-2 py-4 text-left align-middle font-medium"><?= date('d/m/Y', strtotime($transaction['date'])); ?></td>
                                    <th class="h-10 font-medium flex items-center justify-end gap-4 w-36">
                                        <span class="flex items-center justify-center gap-2 cursor-pointer">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24"
                                                fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                                stroke-linejoin="round">
                                                <path d="M12 3H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7" />
                                                <path
                                                    d="M18.375 2.625a1 1 0 0 1 3 3l-9.013 9.014a2 2 0 0 1-.853.505l-2.873.84a.5.5 0 0 1-.62-.62l.84-2.873a2 2 0 0 1 .506-.852z" />
                                            </svg>
                                            Editar
                                        </span>
                                        <a href="actions/delete.php?id=<?= $transaction['id']; ?>" class="flex items-center justify-center cursor-pointer bg-rose-600 rounded size-8">
                                            <input type="hidden" name="month_id" value="<?= intval($_GET['id']); ?>">

                                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="stroke-zinc-50"><path d="M3 6h18"/><path d="M19 6v14c0 1-1 2-2 2H7c-1 0-2-1-2-2V6"/><path d="M8 6V4c0-1 1-2 2-2h4c1 0 2 1 2 2v2"/><line x1="10" x2="10" y1="11" y2="17"/><line x1="14" x2="14" y1="11" y2="17"/></svg>
                                        </a>
                                    </th>
                                </tr>
                            <?php endforeach; ?>
                        <?php else: ?>
                            <tr>
                                <td colspan="6" class="h-10 px-2 py-4 text-center align-middle font-medium">Nenhuma transação encontrada.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <!-- Modal Card -->
        <div id="modalContent" class="bg-white rounded-xl border shadow-lg w-full max-w-md mx-auto p-6">
            <!-- Modal Header -->
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold">Cadastrar despesas</h2>
                <button id="closeModalButton" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
            <p class="text-sm text-gray-500">Cadastre suas despesas</p>

            <!-- Formulário de Despesas -->
            <form action="actions/finances.php" method="POST" class="mt-4 space-y-4">

                <input type="hidden" name="month_id" value="<?= intval($_GET['id']); ?>">

                <!-- Campo Nome -->
                <div>
                    <label for="nome" class="block text-sm font-medium">Nome</label>
                    <input type="text" name="name"
                        class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"
                        placeholder="Digite o nome" required />
                </div>

                <!-- Campo Data -->
                <div>
                    <label for="data" class="block text-sm font-medium">Data</label>
                    <input type="date" name="date"
                        class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"
                        required />
                </div>

                <!-- Campo Valor -->
                <div>
                    <label for="valor" class="block text-sm font-medium">Valor</label>
                    <input type="text" id="valor" name="value"
                        class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"
                        placeholder="Digite o valor" required oninput="formatMoney(this)" />
                </div>

                <!-- Campo Tipo (Entrada ou Saida) -->
                <div>
                    <label for="tipo" class="block text-sm font-medium">Tipo</label>
                    <select name="type"
                        class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"
                        required>
                        <option value="">Selecione o tipo</option>
                        <option value="Entrada">Entrada</option>
                        <option value="Saida">Saida</option>
                    </select>
                </div>

                <!-- Campo Categoria -->
                <div>
                    <label for="categoria" class="block text-sm font-medium">Categoria</label>
                    <select name="category"
                        class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"
                        required>
                        <option value="">Selecione a categoria</option>
                        <option value="Alimentação">Alimentação</option>
                        <option value="Transporte">Transporte</option>
                        <option value="Lazer">Lazer</option>
                        <option value="Salario">Salario</option>
                    </select>
                </div>

                <!-- Botão de Enviar -->
                <button type="submit" name="add_transaction"
                    class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
                    Cadastrar
                </button>
            </form>
        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>