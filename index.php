<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="bg-gray-100 min-h-screen">

   
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
