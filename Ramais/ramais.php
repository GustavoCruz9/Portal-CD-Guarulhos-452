<?php

$ramais = require __DIR__ . '/../data/ramais.php';

$setores = [];
foreach ($ramais as $item) {
    $setores[$item['setor']][] = $item;
}
?>

    <?php include '../Components/header.php'; ?>

    <main class="flex-1 container mx-auto py-12 px-6">

        <div class="flex items-center gap-4 mb-8">
            <div class="bg-green-600 p-4 rounded-2xl text-white text-2xl">
                <img src="../images/ramais/telefone.png" class="w-12 h-12 text-green-600 group-hover:scale-110 transition">
            </div>
            

            <div>
                <h1 class="text-2xl font-bold">Lista de Ramais</h1>
                <p class="text-gray-500">Todos os setores</p>
            </div>
        </div>

        <!-- Busca -->
        <div class="mb-6">
            <input 
                type="text" 
                placeholder="Buscar por setor, nome ou ramal..."
                class="w-full p-3 rounded-xl border border-gray-300 focus:outline-none focus:ring-2 focus:ring-orange-400"
                id="busca"
                onkeyup="filtrar()"
            >
        </div>

         <?php foreach ($setores as $nomeSetor => $itens): ?>
        <div class="bg-white rounded-xl shadow mb-8 setor" data-setor="<?= strtolower($nomeSetor) ?>">
            
            <!-- Título setor -->
            <div class="bg-orange-500 text-white px-6 py-3 rounded-t-xl font-semibold text-lg">
                <?= htmlspecialchars($nomeSetor) ?>
            </div>

            <!-- Ramais -->
            <?php foreach ($itens as $ramal): ?>
                <div class="flex items-center justify-between px-6 py-4 border-b last:border-none item" data-nome="<?= strtolower($ramal['nome']) ?>" data-ramal="<?= $ramal['ramal'] ?>">
                    
                    <div class="flex items-center gap-4">
                        <div class="bg-green-100 text-green-600 p-3 rounded-xl">
                            <img src="../images/ramais/user.png" class="w-6 h-6 text-green-600 group-hover:scale-110 transition">
                        </div>
                        <div class="nome">
                            <?= htmlspecialchars($ramal['nome']) ?>
                        </div>
                    </div>

                    <div class="flex items-center gap-3">
                        <span class="bg-green-100 text-green-700 px-4 py-2 rounded-xl ramal">
                            <?= htmlspecialchars($ramal['ramal']) ?>
                        </span>
                        <button class="bg-orange-500 text-white px-3 py-2 rounded-xl">
                            <img src="../images/ramais/telefone.png" class="w-6 h-6 text-green-600 group-hover:scale-110 transition">
                        </button>
                    </div>
                </div>
            <?php endforeach; ?>

        </div>
    <?php endforeach; ?>

    </main>

    <?php include '../Components/footer.php'; ?>

    <script>
        function filtrar() {
            let input = document.getElementById("busca").value.toLowerCase();
            let setores = document.querySelectorAll(".setor");

            setores.forEach(setor => {
                let nomeSetor = setor.getAttribute("data-setor");
                let itens = setor.querySelectorAll(".item");
                let encontrou = false;

                itens.forEach(item => {
                    let nome = item.getAttribute("data-nome");
                    let ramal = item.getAttribute("data-ramal");

                    if (
                        nome.includes(input) ||
                        ramal.includes(input) ||
                        nomeSetor.includes(input)
                    ) {
                        item.style.display = "flex";
                        encontrou = true;
                    } else {
                        item.style.display = "none";
                    }
                });

                setor.style.display = encontrou ? "block" : "none";
            });
        }
    </script>
</body>

</html>