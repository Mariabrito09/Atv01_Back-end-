<?php
// Exibe um título em formato HTML (h2) na página
echo "<h2>Calcular IMC</h2>";

/**
 * Função para calcular o IMC (Índice de Massa Corporal)
 * Ela recebe dois parâmetros: $peso e $altura
 */
function calcularIMC($peso, $altura) {
    // Retorna o cálculo do IMC: peso dividido pela altura ao quadrado
    // O operador ** representa a potência (exponenciação) em PHP
    return $peso / ($altura ** 2);
}

// Definimos variáveis com valores de teste para o cálculo
$peso = 45;
$altura = 1.60;

// Chamamos a função passando os valores e armazenamos o resultado na variável
$resultado = calcularIMC($peso, $altura);

// Exibe o valor do IMC calculado na tela (usamos number_format para deixar com apenas 2 casas decimais)
echo "Seu IMC é: " . number_format($resultado, 2);
echo "<br>"; // Pula uma linha no navegador

// Estrutura condicional para verificar a faixa de classificação do IMC
if ($resultado < 18.5) {
    // Se o IMC for menor que 18.5
    echo "Abaixo do peso";
} elseif ($resultado < 25) {
    // Se o IMC for maior ou igual a 18.5 e menor que 25
    echo "Peso normal";
} elseif ($resultado < 30) {
    // Se o IMC for maior ou igual a 25 e menor que 30
    echo "Sobrepeso";
} else {
    // Caso nenhuma das condições anteriores seja verdadeira (IMC maior ou igual a 30)
    echo "Obesidade";
}
?>