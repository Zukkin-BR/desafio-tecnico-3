<?php

// Número total de elementos no arquivo de entrada
$totalNumbers = 1000000; // 1 milhão de números

// Abre o arquivo para escrita
$filename = 'input.txt';
$file = fopen($filename, 'w');

// Gera e escreve números aleatórios no arquivo
for ($i = 0; $i < $totalNumbers; $i++) {
    $number = mt_rand(1, PHP_INT_MAX); // Gera um número aleatório entre 1 e o maior inteiro suportado pelo PHP
    fwrite($file, $number . PHP_EOL); // Escreve o número no arquivo
}

// Fecha o arquivo
fclose($file);

echo "Arquivo gerado com sucesso: $filename";
?>
