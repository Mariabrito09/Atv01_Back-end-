<?php
echo "<h2>Tabuada</h2>";
//Valor que será multiplicado para formar a tabuada 
$numero = 7;

//$i=10 e $i <=10: define que a tabuada começa em 1 e vai até o 10
//$i++ = SOMA; adiciona 1 ao número que já está definido em i
for ($i = 1; $i <= 10; $i++) {
    echo "$numero x $i = " . ($numero * $i) . "<br>";
}
