<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Relatório Financeiro</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="style.css">
</head>

<body class="bg-zinc-50 text-zinc-950 antialiased">

    <div class="container mx-auto p-4 space-y-4"">


        <h1 class=" text-4xl font-bold mb-8 text-center text-primary">Relatório Financeiro Anual</h1>

        <div class="mb-8 border rounded-xl shadow bg-white">
            <div class="border-b p-4">
                <h2 class="font-bold">Resumo Anual</h2>
            </div>
            <div class="p-4 grid grid-cols-1 md:grid-cols-3 gap-4">
                <div class="flex items-center justify-between p-4 bg-green-100 rounded-lg transition-all duration-300 hover:scale-105">
                    <div>
                        <p class="text-sm font-medium text-green-800">Total Ganho</p>
                        <p class="text-2xl font-bold text-green-900">R$ 36.800,00</p>
                    </div>
                    <svg class="h-8 w-8 text-green-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="m5 12 7-7 7 7" />
                        <path d="M12 19V5" />
                    </svg>
                </div>
                <div class="flex items-center justify-between p-4 bg-red-100 rounded-lg transition-all duration-300 hover:scale-105">
                    <div>
                        <p class="text-sm font-medium text-red-800">Total Gasto</p>
                        <p class="text-2xl font-bold text-red-900">R$ 31.500,00</p>
                    </div>
                    <svg class="h-8 w-8 text-red-500" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                        viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round"
                        stroke-linejoin="round">
                        <path d="M12 5v14" />
                        <path d="m19 12-7 7-7-7" />
                    </svg>
                </div>
                <div class="flex items-center justify-between p-4 bg-blue-100 rounded-lg transition-all duration-300 hover:scale-105">
                    <div>
                        <p class="text-sm font-medium text-blue-800">Saldo Final</p>
                        <p class="text-2xl font-bold text-blue-900">R$ 5.300,00</p>
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

        <button id="openModalButton" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded flex gap-2 ml-auto">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="">
                <path d="M5 12h14" />
                <path d="M12 5v14" />
            </svg>
            Cadastrar mês
        </button>

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-6">
            <!-- Exemplo de Card Mensal -->
            <a href="#" class="border rounded-xl shadow cursor-pointer bg-white">
                <div class="border-b p-4 flex justify-between items-center">
                    <span class="text-lg font-bold text-primary">Janeiro</span>
                    <span class="text-sm text-gray-500">#1</span>
                </div>
                <div class="p-4">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Gasto:</p>
                            <p class="font-semibold text-red-500">R$ 2.500,00</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Ganho:</p>
                            <p class="font-semibold text-green-600">R$ 3.000,00</p>
                        </div>
                        <div class="border-t pt-2">
                            <p class="text-sm font-semibold mb-2 text-primary">Principais Gastos:</p>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Alimentação</span>
                                <span class="text-black">R$ 800,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Moradia</span>
                                <span class="text-black">R$ 1.000,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Transporte</span>
                                <span class="text-black">R$ 400,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Lazer</span>
                                <span class="text-black">R$ 300,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t">
                        <p class="text-lg font-semibold flex justify-between items-center">
                            <span class="text-primary">Saldo:</span>
                            <span class="text-green-600 flex items-center">
                                R$ 500,00
                                <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                    <polyline points="16 7 22 7 22 13" />
                                </svg>
                            </span>
                        </p>
                    </div>
                </div>
            </a>


            <a href="#" class="border rounded-xl shadow cursor-pointer bg-white">
                <div class="border-b p-4 flex justify-between items-center">
                    <span class="text-lg font-bold text-primary">Janeiro</span>
                    <span class="text-sm text-gray-500">#1</span>
                </div>
                <div class="p-4">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Gasto:</p>
                            <p class="font-semibold text-red-500">R$ 2.500,00</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Ganho:</p>
                            <p class="font-semibold text-green-600">R$ 3.000,00</p>
                        </div>
                        <div class="border-t pt-2">
                            <p class="text-sm font-semibold mb-2 text-primary">Principais Gastos:</p>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Alimentação</span>
                                <span class="text-black">R$ 800,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Moradia</span>
                                <span class="text-black">R$ 1.000,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Transporte</span>
                                <span class="text-black">R$ 400,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Lazer</span>
                                <span class="text-black">R$ 300,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t">
                        <p class="text-lg font-semibold flex justify-between items-center">
                            <span class="text-primary">Saldo:</span>
                            <span class="text-green-600 flex items-center">
                                R$ 500,00
                                <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                    <polyline points="16 7 22 7 22 13" />
                                </svg>
                            </span>
                        </p>
                    </div>
                </div>
            </a>

            <a href="#" class="border rounded-xl shadow cursor-pointer bg-white">
                <div class="border-b p-4 flex justify-between items-center">
                    <span class="text-lg font-bold text-primary">Janeiro</span>
                    <span class="text-sm text-gray-500">#1</span>
                </div>
                <div class="p-4">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Gasto:</p>
                            <p class="font-semibold text-red-500">R$ 2.500,00</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Ganho:</p>
                            <p class="font-semibold text-green-600">R$ 3.000,00</p>
                        </div>
                        <div class="border-t pt-2">
                            <p class="text-sm font-semibold mb-2 text-primary">Principais Gastos:</p>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Alimentação</span>
                                <span class="text-black">R$ 800,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Moradia</span>
                                <span class="text-black">R$ 1.000,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Transporte</span>
                                <span class="text-black">R$ 400,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Lazer</span>
                                <span class="text-black">R$ 300,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t">
                        <p class="text-lg font-semibold flex justify-between items-center">
                            <span class="text-primary">Saldo:</span>
                            <span class="text-green-600 flex items-center">
                                R$ 500,00
                                <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                    <polyline points="16 7 22 7 22 13" />
                                </svg>
                            </span>
                        </p>
                    </div>
                </div>
            </a>

            <a href="#" class="border rounded-xl shadow cursor-pointer bg-white">
                <div class="border-b p-4 flex justify-between items-center">
                    <span class="text-lg font-bold text-primary">Janeiro</span>
                    <span class="text-sm text-gray-500">#1</span>
                </div>
                <div class="p-4">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Gasto:</p>
                            <p class="font-semibold text-red-500">R$ 2.500,00</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Ganho:</p>
                            <p class="font-semibold text-green-600">R$ 3.000,00</p>
                        </div>
                        <div class="border-t pt-2">
                            <p class="text-sm font-semibold mb-2 text-primary">Principais Gastos:</p>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Alimentação</span>
                                <span class="text-black">R$ 800,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Moradia</span>
                                <span class="text-black">R$ 1.000,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Transporte</span>
                                <span class="text-black">R$ 400,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Lazer</span>
                                <span class="text-black">R$ 300,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t">
                        <p class="text-lg font-semibold flex justify-between items-center">
                            <span class="text-primary">Saldo:</span>
                            <span class="text-green-600 flex items-center">
                                R$ 500,00
                                <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                    <polyline points="16 7 22 7 22 13" />
                                </svg>
                            </span>
                        </p>
                    </div>
                </div>
            </a>

            <a href="#" class="border rounded-xl shadow cursor-pointer bg-white">
                <div class="border-b p-4 flex justify-between items-center">
                    <span class="text-lg font-bold text-primary">Janeiro</span>
                    <span class="text-sm text-gray-500">#1</span>
                </div>
                <div class="p-4">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Gasto:</p>
                            <p class="font-semibold text-red-500">R$ 2.500,00</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Ganho:</p>
                            <p class="font-semibold text-green-600">R$ 3.000,00</p>
                        </div>
                        <div class="border-t pt-2">
                            <p class="text-sm font-semibold mb-2 text-primary">Principais Gastos:</p>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Alimentação</span>
                                <span class="text-black">R$ 800,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Moradia</span>
                                <span class="text-black">R$ 1.000,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Transporte</span>
                                <span class="text-black">R$ 400,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Lazer</span>
                                <span class="text-black">R$ 300,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t">
                        <p class="text-lg font-semibold flex justify-between items-center">
                            <span class="text-primary">Saldo:</span>
                            <span class="text-green-600 flex items-center">
                                R$ 500,00
                                <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                    <polyline points="16 7 22 7 22 13" />
                                </svg>
                            </span>
                        </p>
                    </div>
                </div>
            </a>

            <a href="#" class="border rounded-xl shadow cursor-pointer bg-white">
                <div class="border-b p-4 flex justify-between items-center">
                    <span class="text-lg font-bold text-primary">Janeiro</span>
                    <span class="text-sm text-gray-500">#1</span>
                </div>
                <div class="p-4">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Gasto:</p>
                            <p class="font-semibold text-red-500">R$ 2.500,00</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Ganho:</p>
                            <p class="font-semibold text-green-600">R$ 3.000,00</p>
                        </div>
                        <div class="border-t pt-2">
                            <p class="text-sm font-semibold mb-2 text-primary">Principais Gastos:</p>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Alimentação</span>
                                <span class="text-black">R$ 800,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Moradia</span>
                                <span class="text-black">R$ 1.000,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Transporte</span>
                                <span class="text-black">R$ 400,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Lazer</span>
                                <span class="text-black">R$ 300,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t">
                        <p class="text-lg font-semibold flex justify-between items-center">
                            <span class="text-primary">Saldo:</span>
                            <span class="text-green-600 flex items-center">
                                R$ 500,00
                                <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                    <polyline points="16 7 22 7 22 13" />
                                </svg>
                            </span>
                        </p>
                    </div>
                </div>
            </a>

            <a href="#" class="border rounded-xl shadow cursor-pointer bg-white">
                <div class="border-b p-4 flex justify-between items-center">
                    <span class="text-lg font-bold text-primary">Janeiro</span>
                    <span class="text-sm text-gray-500">#1</span>
                </div>
                <div class="p-4">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Gasto:</p>
                            <p class="font-semibold text-red-500">R$ 2.500,00</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Ganho:</p>
                            <p class="font-semibold text-green-600">R$ 3.000,00</p>
                        </div>
                        <div class="border-t pt-2">
                            <p class="text-sm font-semibold mb-2 text-primary">Principais Gastos:</p>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Alimentação</span>
                                <span class="text-black">R$ 800,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Moradia</span>
                                <span class="text-black">R$ 1.000,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Transporte</span>
                                <span class="text-black">R$ 400,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Lazer</span>
                                <span class="text-black">R$ 300,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t">
                        <p class="text-lg font-semibold flex justify-between items-center">
                            <span class="text-primary">Saldo:</span>
                            <span class="text-green-600 flex items-center">
                                R$ 500,00
                                <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                    <polyline points="16 7 22 7 22 13" />
                                </svg>
                            </span>
                        </p>
                    </div>
                </div>
            </a>

            <a href="#" class="border rounded-xl shadow cursor-pointer bg-white">
                <div class="border-b p-4 flex justify-between items-center">
                    <span class="text-lg font-bold text-primary">Janeiro</span>
                    <span class="text-sm text-gray-500">#1</span>
                </div>
                <div class="p-4">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Gasto:</p>
                            <p class="font-semibold text-red-500">R$ 2.500,00</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Ganho:</p>
                            <p class="font-semibold text-green-600">R$ 3.000,00</p>
                        </div>
                        <div class="border-t pt-2">
                            <p class="text-sm font-semibold mb-2 text-primary">Principais Gastos:</p>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Alimentação</span>
                                <span class="text-black">R$ 800,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Moradia</span>
                                <span class="text-black">R$ 1.000,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Transporte</span>
                                <span class="text-black">R$ 400,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Lazer</span>
                                <span class="text-black">R$ 300,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t">
                        <p class="text-lg font-semibold flex justify-between items-center">
                            <span class="text-primary">Saldo:</span>
                            <span class="text-green-600 flex items-center">
                                R$ 500,00
                                <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                    <polyline points="16 7 22 7 22 13" />
                                </svg>
                            </span>
                        </p>
                    </div>
                </div>
            </a>

            <a href="#" class="border rounded-xl shadow cursor-pointer bg-white">
                <div class="border-b p-4 flex justify-between items-center">
                    <span class="text-lg font-bold text-primary">Janeiro</span>
                    <span class="text-sm text-gray-500">#1</span>
                </div>
                <div class="p-4">
                    <div class="space-y-4">
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Gasto:</p>
                            <p class="font-semibold text-red-500">R$ 2.500,00</p>
                        </div>
                        <div class="flex justify-between items-center">
                            <p class="text-sm text-gray-500">Ganho:</p>
                            <p class="font-semibold text-green-600">R$ 3.000,00</p>
                        </div>
                        <div class="border-t pt-2">
                            <p class="text-sm font-semibold mb-2 text-primary">Principais Gastos:</p>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Alimentação</span>
                                <span class="text-black">R$ 800,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Moradia</span>
                                <span class="text-black">R$ 1.000,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Transporte</span>
                                <span class="text-black">R$ 400,00</span>
                            </div>
                            <div class="flex justify-between items-center text-sm">
                                <span class="text-gray-500">Lazer</span>
                                <span class="text-black">R$ 300,00</span>
                            </div>
                        </div>
                    </div>
                    <div class="mt-4 pt-4 border-t">
                        <p class="text-lg font-semibold flex justify-between items-center">
                            <span class="text-primary">Saldo:</span>
                            <span class="text-green-600 flex items-center">
                                R$ 500,00
                                <svg class="ml-1 h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                    viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                                    stroke-linecap="round" stroke-linejoin="round">
                                    <polyline points="22 7 13.5 15.5 8.5 10.5 2 17" />
                                    <polyline points="16 7 22 7 22 13" />
                                </svg>
                            </span>
                        </p>
                    </div>
                </div>
            </a>
        </div>
    </div>

    <!-- Modal Overlay -->
    <div id="modal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
        <!-- Modal Card -->
        <div id="modalContent" class="bg-white rounded-xl border shadow-lg w-full max-w-md mx-auto p-6">
            <!-- Modal Header -->
            <div class="flex justify-between items-center">
                <h2 class="text-xl font-semibold">Cadastrar mês</h2>
                <button id="closeModalButton" class="text-gray-500 hover:text-gray-700">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none"
                        stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M18 6 6 18" />
                        <path d="m6 6 12 12" />
                    </svg>
                </button>
            </div>
            <p class="text-sm text-gray-500">Cadastre um mês para gerenciar suas despesas.</p>

            <!-- Formulário de Despesas -->
            <form class="mt-4 space-y-4">
                <!-- Campo Nome -->


                <!-- Campo Data -->
                <div>
                    <label for="data" class="block text-sm font-medium">Data</label>
                    <input type="date" id="data"
                        class="w-full mt-1 px-3 py-2 border rounded focus:outline-none focus:ring focus:ring-blue-300"
                        required />
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