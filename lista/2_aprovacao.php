<?php
echo "<h2>Aprovação</h2>";

$média = 5.0;
$faltas = 10;

//Verifica se será aprovado 
if ($média >= 6.0 && $faltas <= 15) {
    echo "Aprovado!";
}
else {
    echo "Reprovado!";
}
?>