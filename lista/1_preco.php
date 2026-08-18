<?php
$preço = 50;
$quantidade = 6; 

$total = $preço * $quantidade;

//Verifica se tem desconto e faz o cálculo 
if ($total >= 200)  {
    // desconto
    $total = $total - ($total * 0.10);
}

// Exibir o valor
echo "O valor final da compra é: $total";
?>
