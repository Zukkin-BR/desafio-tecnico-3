<?php

$totalNumbers = 100000; // 100 mil números

// Abre o arquivo para escrita
$filename = 'input.txt';
$file = fopen($filename, 'w');

// Gera e escreve números aleatórios de 10 dígitos no arquivo
for ($i = 0; $i < $totalNumbers; $i++) {
    $number = mt_rand(1000000000, 9999999999); // Gera um número aleatório de 10 dígitos
    fwrite($file, $number . PHP_EOL); // Escreve o número no arquivo
}

// Fecha o arquivo
fclose($file);

echo "Arquivo gerado com sucesso: $filename";
?>
