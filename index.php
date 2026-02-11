<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

<header class="bg-white border-t-8 border-orange-600 px-48">
        <div class="mx-auto py-4 flex flex-col md:flex-row md:items-center md:justify-between">

            <div class="flex items-center gap-4">
                <img src="images/LogoAtacadao.png" alt="Logo Atacadão" class="h-14">

                <div>
                    <h1 class="text-4xl font-bold text-green-600">
                        Atacadão
                    </h1>
                    <p class="text-lg text-green-600">
                        CD | Guarulhos 452
                    </p>
                </div>
            </div>

            <div class="mt-4 md:mt-0 w-full md:w-80">
                <div class="relative">
                    <input 
                        type="text" 
                        placeholder="Pesquisar..."
                        class="bg-gray-100 w-full pl-4 pr-10 py-2 border border-gray-300 rounded-2xl
                               focus:outline-none focus:ring-2 focus:ring-orange-400 
                               focus:border-orange-400 transition"
                    >
                    <svg xmlns="http://www.w3.org/2000/svg"
                         class="h-5 w-5 text-gray-400 absolute right-3 top-2.5"
                         fill="none"
                         viewBox="0 0 24 24"
                         stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                              d="M21 21l-4.35-4.35M16.65 10.65a6 6 0 11-12 0 6 6 0 0112 0z" />
                    </svg>
                </div>
            </div>

        </div>
    </header>

    <nav class="bg-white border-t border-gray-300 shadow-md">
        <div class="max-w-7xl mx-auto">
            <ul class="flex justify-center items-center text-gray-800 font-semibold">

                <!-- CPD -->
                <li class="relative group">
                    <button class="px-6 py-4 hover:text-green-600 flex items-center gap-2 transition text-lg">
                        CPD <span class="text-sm">▾</span>
                    </button>

                    <ul class="absolute left-0 top-full hidden group-hover:block 
                               w-48 bg-white shadow-lg rounded-md border border-gray-200 z-50">
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Chamados</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Inventário</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Relatórios</li>
                    </ul>
                </li>

                <div class="h-6 w-px bg-gray-400"></div>

                <!-- RH -->
                <li class="relative group">
                    <button class="px-6 py-4 hover:text-green-600 flex items-center gap-2 transition text-lg">
                        RH <span class="text-sm">▾</span>
                    </button>

                    <ul class="absolute left-0 top-full hidden group-hover:block 
                               w-48 bg-white shadow-lg rounded-md border border-gray-200 z-50">
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Folha</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Férias</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Benefícios</li>
                    </ul>
                </li>

                <div class="h-6 w-px bg-gray-400"></div>

                <!-- Estoque -->
                <li class="relative group">
                    <button class="px-6 py-4 hover:text-green-600 flex items-center gap-2 transition text-lg">
                        Estoque <span class="text-sm">▾</span>
                    </button>

                    <ul class="absolute left-0 top-full hidden group-hover:block 
                               w-48 bg-white shadow-lg rounded-md border border-gray-200 z-50">
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Entrada</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Saída</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Consulta</li>
                    </ul>
                </li>

                <div class="h-6 w-px bg-gray-400"></div>

                <!-- Expedição -->
                <li class="relative group">
                    <button class="px-6 py-4 hover:text-green-600 flex items-center gap-2 transition text-lg">
                        Expedição <span class="text-sm">▾</span>
                    </button>

                    <ul class="absolute left-0 top-full hidden group-hover:block 
                               w-48 bg-white shadow-lg rounded-md border border-gray-200 z-50">
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Separação</li>
                        <li class="px-4 py-2 hover:bg-gray-100 cursor-pointer">Romaneios</li>
                    </ul>
                </li>

                <div class="h-6 w-px bg-gray-400"></div>

                <!-- Ramais -->
                <li>
                    <button class="px-6 py-4 hover:text-green-600 transition text-lg">
                        Ramais
                    </button>
                </li>

            </ul>
        </div>
    </nav>

<script>
    let tituloOriginal = "Portal CD Guarulhos | 452 - ";
    let titulo = tituloOriginal;

    function rolarTitulo() {
        titulo = titulo.substring(1) + titulo.charAt(0);
        document.title = titulo;
    }

    setInterval(rolarTitulo, 400);
</script>
</body>
</html>
