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

<footer class="bg-gray-200 py-6 mt-auto">
    <div class="max-w-7xl mx-auto text-center px-4">
        <p class="text-sm text-gray-600">
            Todos os direitos reservados Filial 452 ©
            <span class="font-medium">Gustavo da Cruz Santos</span>
            <?= $anoAtual ?>
        </p>
    </div>
</footer>