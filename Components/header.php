<?php
    $menu = require __DIR__ . "/../data/menu.php";
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Portal CD Guarulhos | 452</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen flex flex-col">

    <header class="bg-white border-t-8 border-orange-600 px-48">
        <div class="mx-auto py-4 flex flex-col md:flex-row md:items-center md:justify-between">

            <div class="flex items-center gap-4">
                <img src="/Portal/images/LogoAtacadao.png" alt="Logo Atacadão" class="h-14">

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
                    <input  id="searchInput" type="text" placeholder="Pesquisar..." class="bg-gray-100 w-full pl-4 pr-10 py-2 border border-gray-300 rounded-2xl focus:outline-none focus:ring-2 focus:ring-orange-400 focus:border-orange-400 transition">
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 text-gray-400 absolute right-3 top-2.5"
                        fill="none" viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M21 21l-4.35-4.35M16.65 10.65a6 6 0 11-12 0 6 6 0 0112 0z" />
                    </svg>
                    <div id="searchResults" 
                        class="absolute mt-2 w-full bg-white shadow-lg rounded-xl border border-gray-200 hidden z-50">
                    </div>
                </div>
            </div>

        </div>
    </header>

    <nav class="bg-white border-t border-gray-300 shadow-md">
        <div class="max-w-7xl mx-auto">
            <ul class="flex justify-center items-center text-gray-800 font-semibold">

                <?php foreach ($menu as $setor): ?>
                    <li class="relative group">
                        <button class="px-6 py-4 hover:text-green-600 flex items-center gap-2 transition text-lg">
                            <?= $setor["setor"] ?> <span class="text-sm">▾</span>
                        </button>

                        <ul class="absolute left-0 top-full hidden group-hover:block 
                                w-48 bg-white shadow-lg rounded-md border border-gray-200 z-50">

                            <?php foreach ($setor["itens"] as $item): ?>
                                <li>
                                    <a href="<?= $item["link"] ?>" 
                                    class="block px-4 py-2 hover:bg-gray-100">
                                        <?= $item["nome"] ?>
                                    </a>
                                </li>
                            <?php endforeach; ?>

                        </ul>
                    </li>

                    <div class="h-6 w-px bg-gray-400"></div>

                <?php endforeach; ?>

            </ul>
        </div>
    </nav>

    <script>
        const menuItems = [
            { setor: "CPD", nome: "Chamados", link: "#" },
            { setor: "CPD", nome: "Inventário", link: "#" },
            { setor: "CPD", nome: "Relatórios", link: "#" },

            { setor: "RH", nome: "Folha", link: "#" },
            { setor: "RH", nome: "Férias", link: "#" },
            { setor: "RH", nome: "Benefícios", link: "#" },

            { setor: "Estoque", nome: "Entrada", link: "#" },
            { setor: "Estoque", nome: "Saída", link: "#" },
            { setor: "Estoque", nome: "Consulta", link: "#" },

            { setor: "Expedição", nome: "Separação", link: "#" },
            { setor: "Expedição", nome: "Romaneios", link: "#" },

            { setor: "Geral", nome: "Ramais", link: "./Ramais/ramais.php" }
        ];

        const input = document.getElementById("searchInput");
        const results = document.getElementById("searchResults");

        input.addEventListener("input", function () {
            const termo = this.value.toLowerCase();
            results.innerHTML = "";

            if (termo === "") {
                results.classList.add("hidden");
                return;
            }

            const filtrados = menuItems.filter(item =>
                item.nome.toLowerCase().includes(termo) ||
                item.setor.toLowerCase().includes(termo)
            );

            if (filtrados.length === 0) {
                results.innerHTML = `
                    <div class="px-4 py-2 text-gray-500">
                        Nenhum resultado encontrado
                    </div>`;
            } else {
                filtrados.forEach(item => {
                    results.innerHTML += `
                        <a href="${item.link}" 
                        class="block px-4 py-2 hover:bg-gray-100">
                            <span class="font-semibold text-green-600">
                                ${item.setor}
                            </span>
                            <span class="text-gray-700">
                                - ${item.nome}
                            </span>
                        </a>
                    `;
                });
            }

            results.classList.remove("hidden");
        });

        document.addEventListener("click", function (e) {
            if (!input.contains(e.target) && !results.contains(e.target)) {
                results.classList.add("hidden");
            }
        });
    </script>


</body>

</html>