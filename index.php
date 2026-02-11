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

    <main class="max-w-9xl mx-auto py-12 px-48">

        <div class="text-xl text-right text-green-600 font-semibold mb-8">
            Sexta-feira, 9 de Janeiro de 2026
        </div>

        <div class="grid md:grid-cols-2 gap-10 items-center">

            <!-- TEXTO -->
            <div>
                <h1 class="text-8xl md:text-8xl font-bold text-green-600 leading-tight">
                    Bem Vindos ao <br> Nosso Portal!
                </h1>

                <p class="mt-6 text-gray-600 text-lg">
                    Aqui você terá acesso a todos os link que precisa,
                    caso não encontre algo por aqui fale com o CPD.
                </p>
            </div>

            <!-- CAROUSEL -->
            <div class="relative">

                <div class="overflow-hidden rounded-3xl">
                    <div id="carousel" class="flex transition-transform duration-500">

                        <!-- Slide 1 -->
                        <div class="min-w-full h-86">
                            <img src="images/caroussel/ImgCarrosel1.png" 
                                 class="w-full h-full object-cover">
                        </div>

                        <!-- Slide 2 -->
                        <div class="min-w-full h-86 bg-green-500 flex items-center justify-center text-white text-3xl font-bold">
                            Portal 452 Atualizado
                        </div>

                        <!-- Slide 3 -->
                        <div class="min-w-full h-86 bg-blue-500 flex items-center justify-center text-white text-3xl font-bold">
                            Bem-vindo ao Sistema
                        </div>

                    </div>
                </div>

                <!-- Botões -->
                <button onclick="prevSlide()" 
                        class="h-14 absolute left-3 top-1/2 -translate-y-1/2 bg-white/70 hover:bg-white p-2 rounded-full shadow">
                    ❮
                </button>

                <button onclick="nextSlide()" 
                        class="h-14 absolute right-3 top-1/2 -translate-y-1/2 bg-white/70 hover:bg-white p-2 rounded-full shadow">
                    ❯
                </button>

            </div>

        </div>

        <section class="bg-gray-100">
            <div class="mx-auto px-6">
                
                <!-- Título -->
                <h2 class="text-3xl font-semibold text-green-600 mb-8">
                Links Úteis
                </h2>

                <!-- Grid dos Cards -->
                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-8">

                <!-- Card 1 -->
                <a href="#" target="_blank"
                    class="group bg-white border-2 border-orange-500 rounded-2xl p-8 flex flex-col items-center text-center shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-2">

                    <svg class="w-12 h-12 text-green-600 mb-4 group-hover:scale-110 transition"
                        fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 12.79V7a2 2 0 00-2-2h-3.21
                            a1 1 0 01-.7-.29l-1.59-1.59
                            a1 1 0 00-.7-.29H9a2 2 0 00-2 2v2"/>
                    </svg>

                    <span class="text-lg font-medium text-green-600">
                    Aniversariantes do mês
                    </span>
                </a>

                <!-- Card 2 -->
                <a href="https://ibmsvg.br-atacadao.corp:9443/itim/ui/Login.jsp" target="_blank"
                    class="group bg-white border-2 border-orange-500 rounded-2xl p-8 flex flex-col items-center text-center shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-2">

                    <svg class="w-12 h-12 text-green-600 mb-4 group-hover:scale-110 transition"
                        fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                            d="M7 8h10M7 12h6m-6 4h10"/>
                    </svg>

                    <span class="text-lg font-medium text-green-600">
                    IDM Usuário
                    </span>
                </a>

                <!-- Card 3 -->
                <a href="https://ibmsvg.br-atacadao.corp:9443/itim/console/jsp/logon/Login.jsp" target="_blank"
                    class="group bg-white border-2 border-orange-500 rounded-2xl p-8 flex flex-col items-center text-center shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-2">

                    <svg class="w-12 h-12 text-green-600 mb-4 group-hover:scale-110 transition"
                        fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                            d="M16 7l-4 4-4-4m0 6l4-4 4 4"/>
                    </svg>

                    <span class="text-lg font-medium text-green-600">
                    IDM Administrativo
                    </span>
                </a>

                <!-- Card 4 -->
                <a href="https://nfe.portal.br-atacadao.corp/NFe_GDeWeb_AD/saidas.aspx" target="_blank"
                    class="group bg-white border-2 border-orange-500 rounded-2xl p-8 flex flex-col items-center text-center shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-2">

                    <svg class="w-12 h-12 text-green-600 mb-4 group-hover:scale-110 transition"
                        fill="none" stroke="currentColor" stroke-width="1.5"
                        viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round"
                            d="M12 4l8 16H4L12 4z"/>
                    </svg>

                    <span class="text-lg font-medium text-green-600">
                    Triangulus Verde
                    </span>
                </a>

                </div>
            </div>
            </section>


    </main>

    <footer class="bg-gray-200 py-6 mt-12">
    <div class="max-w-7xl mx-auto text-center">
        <p class="text-sm text-gray-600">
        Todos os direitos reservados Filial 452 © 
        <span class="font-medium">Gustavo da Cruz Santos</span> 
        2026
        </p>
    </div>
    </footer>


    <!-- SCRIPT CAROUSEL -->
    <script>
        let currentIndex = 0;
        const carousel = document.getElementById("carousel");
        const totalSlides = carousel.children.length;

        function updateCarousel() {
            carousel.style.transform = `translateX(-${currentIndex * 100}%)`;
        }

        function nextSlide() {
            currentIndex = (currentIndex + 1) % totalSlides;
            updateCarousel();
        }

        function prevSlide() {
            currentIndex = (currentIndex - 1 + totalSlides) % totalSlides;
            updateCarousel();
        }

        setInterval(nextSlide, 8000);

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
