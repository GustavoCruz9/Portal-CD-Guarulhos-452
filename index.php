<?php
date_default_timezone_set('America/Sao_Paulo');

$formatter = new IntlDateFormatter(
    'pt_BR',
    IntlDateFormatter::FULL,
    IntlDateFormatter::NONE,
    'America/Sao_Paulo'
);

$dataFormatada = $formatter->format(new DateTime());
$anoAtual = date('Y');
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

    <?php include 'Components/header.php'; ?>

    <main class="max-w-9xl mx-auto py-12 px-48">

        <div class="text-xl text-right text-green-600 font-semibold mb-8 mb-4 md:mb-8 lg:mb-12">
            <?= ucfirst($dataFormatada); ?>
        </div>

        <div class="grid md:grid-cols-2 gap-10 items-center">

            <!-- TEXTO -->
            <div>
                <h1
                    class="text-3xl sm:text-4xl md:text-6xl lg:text-7xl xl:text-8xl font-bold text-green-600 leading-tight">
                    Bem Vindos ao <br class="hidden sm:block"> Nosso Portal!
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
                            <img src="images/caroussel/ImgCarrosel1.png" class="w-full h-full object-cover">
                        </div>

                        <!-- Slide 2 -->
                        <div class="min-w-full h-86">
                            <img src="images/caroussel/ImgCarrosel1.png" class="w-full h-full object-cover">
                        </div>

                        <!-- Slide 3 -->
                        <div class="min-w-full h-86">
                            <img src="images/caroussel/ImgCarrosel1.png" class="w-full h-full object-cover">
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

        <section class="bg-gray-100 mt-4 md:mt-8 lg:mt-12">

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

                        <img src="images/links/Birthday.png"
                            class="w-12 h-12 text-green-600 mb-4 group-hover:scale-110 transition">

                        <span class="text-lg font-medium text-green-600">
                            Aniversariantes do mês
                        </span>
                    </a>

                    <!-- Card 2 -->
                    <a href="https://ibmsvg.br-atacadao.corp:9443/itim/ui/Login.jsp" target="_blank"
                        class="group bg-white border-2 border-orange-500 rounded-2xl p-8 flex flex-col items-center text-center shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-2">

                        <img src="images/links/IdmUser.png" class="w-12 h-12 text-green-600 mb-4 group-hover:scale-110 transition">

                        <span class="text-lg font-medium text-green-600">
                            IDM Usuário
                        </span>
                    </a>

                    <!-- Card 3 -->
                    <a href="https://ibmsvg.br-atacadao.corp:9443/itim/console/jsp/logon/Login.jsp" target="_blank"
                        class="group bg-white border-2 border-orange-500 rounded-2xl p-8 flex flex-col items-center text-center shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-2">

                        <img src="images/links/Idm.png" class="w-12 h-12 text-green-600 mb-4 group-hover:scale-110 transition">

                        <span class="text-lg font-medium text-green-600">
                            IDM Administrativo
                        </span>
                    </a>

                    <!-- Card 4 -->
                    <a href="https://nfe.portal.br-atacadao.corp/NFe_GDeWeb_AD/" target="_blank"
                        class="group bg-white border-2 border-orange-500 rounded-2xl p-8 flex flex-col items-center text-center shadow-md transition-all duration-300 hover:shadow-xl hover:-translate-y-2">

                        <img src="images/links/triangulo.png" class="w-12 h-12 text-green-600 mb-4 group-hover:scale-110 transition">

                        <span class="text-lg font-medium text-green-600">
                            Triangulus Verde
                        </span>
                    </a>

                </div>
            </div>
        </section>


    </main>

    <?php include 'Components/footer.php'; ?>
    
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