<?php
$notas = ['4', '3', '9', '8', '6'];

echo "<h2>Notas</h2>";

//Atribuo valor 0 para as variáveis apenas para o código utiliza-las e depois atribuir o valor correto 
$soma = 0;
$maior = $notas [0];
$menor = $notas [0];

//Tudo que for feito utilizando as notas separadamente é feito aqui!
//Ele pega a lista de dados completa e verifica dado por dado separadamente
foreach ($notas as $nota) {
    $soma += $nota; //$soma = $soma + $nota; (é apenas um atalho)
    //Verifica a nota maior e menor 
    if ($nota > $maior){
        $maior = $nota;
    }
    if ($nota < $menor){
        $menor = $nota;
    }
}

//Calcula a média 
//Count: o código soma a quantidade de dados sozinho; é a mesma coisa de colocar 5 no lugar
$media = $soma/count($notas);

echo "A maior nota é: $maior <br>";
echo "A menor nota é: $menor <br>";
echo "A média das notas é: $media <br>";
?>