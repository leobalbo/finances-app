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
            <h1 class="text-2xl font-bold">Histórico de transações</h1>
            <button id="openModalButton" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded flex gap-2">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                    stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
                    <path d="M5 12h14" />
                    <path d="M12 5v14" />
                </svg>
                Cadastrar transação
            </button>
        </div>

        <!-- GRÁFICOS -->
        <div class="grid grid-cols-2 gap-4">
            <div class="rounded-xl border bg-card shadow">
                <div class="flex flex-col space-y-1.5 p-6">
                    <span class="font-semibold leading-none tracking-tight">Gráfico de despesas Geral</span>
                    <span class="text-sm">Despesas geral</span>
                </div>
                <div class="p-6 pt-0">
                    <div class="h-[200px] flex items-center justify-center border rounded">
                        GRÁFICO AQUI - FAZER DEPOIS
                    </div>
                </div>
            </div>

            <div class="rounded-xl border bg-card shadow">
                <div class="flex flex-col space-y-1.5 p-6">
                    <span class="font-semibold leading-none tracking-tight">Gráfico de despesas por Tipo</span>
                    <span class="text-sm">Despesas por tipo</span>
                </div>
                <div class="p-6 pt-0">
                    <div class="h-[200px] flex items-center justify-center border rounded">
                        GRÁFICO AQUI - FAZER DEPOIS
                    </div>
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
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium"></th>
                        </tr>
                    </thead>

                    <!-- BODY -->
                    <tbody class="[&_tr:last-child]:border-0">
                        <!-- DADOS -->
                        <tr class="border-b transition-colors hover:bg-zinc-200 my-2">
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">1</th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">Marmita - Almoço</th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">Alimentação</th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">
                                <span class='text-zinc-50 bg-red-600 py-1 px-2 rounded'>
                                    SAIDA
                                </span>
                            </th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">
                                R$ 1.000,00
                            </th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">12/11/2024</th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">
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
                            </th>
                        </tr>
                        <tr class="border-b transition-colors hover:bg-zinc-200 my-2">
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">2</th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">Gorduroso</th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">Salário</th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">
                                <span class='text-zinc-50 bg-emerald-600 py-1 px-2 rounded'>
                                    ENTRADA
                                </span>
                            </th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">
                                R$ 3.432,00
                            </th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">07/11/2024</th>
                            <th class="h-10 px-2 py-4 text-left align-middle font-medium">
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
                            </th>
                        </tr>
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
            <form class="mt-4 space-y-4">
                <!-- Campo Nome -->
                <div>
                    <label for="nome" class="block text-sm font-medium">Nome</label>
                    <input type="text" id="nome"
                        class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"
                        placeholder="Digite o nome" required />
                </div>

                <!-- Campo Data -->
                <div>
                    <label for="data" class="block text-sm font-medium">Data</label>
                    <input type="date" id="data"
                        class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"
                        required />
                </div>

                <!-- Campo Valor -->
                <div>
                    <label for="valor" class="block text-sm font-medium">Valor</label>
                    <input type="number" id="valor"
                        class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"
                        placeholder="Digite o valor" required />
                </div>

                <!-- Campo Tipo (Entrada ou Saída) -->
                <div>
                    <label for="tipo" class="block text-sm font-medium">Tipo</label>
                    <select id="tipo"
                        class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"
                        required>
                        <option value="">Selecione o tipo</option>
                        <option value="entrada">Entrada</option>
                        <option value="saida">Saída</option>
                    </select>
                </div>

                <!-- Campo Categoria -->
                <div>
                    <label for="categoria" class="block text-sm font-medium">Categoria</label>
                    <select id="categoria"
                        class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"
                        required>
                        <option value="">Selecione a categoria</option>
                        <option value="alimentacao">Alimentação</option>
                        <option value="transporte">Transporte</option>
                    </select>
                </div>

                <!-- Botão de Enviar -->
                <button type="submit"
                    class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-300">
                    Cadastrar
                </button>
            </form>
        </div>
    </div>


    <script src="script.js"></script>
</body>

</html>