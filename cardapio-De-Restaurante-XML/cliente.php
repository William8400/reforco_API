<?php

$cardapio = simplexml_load_file('info.xml');

echo "<h1> Cardápio do Restaurante </h1>";

foreach ($cardapio as $comida){
    echo "<hr>";

    echo " <h2> Café da Manhã: </h2>";

    echo "<p><b>Nome:</b> {$comida->name}</p>";
    echo "<p><b>Preço:</b> {$comida->price}</p>";
    echo "<p><b>Descrição:</b> {$comida->description}</p>";
    echo "<p><b>Calorias:</b> {$comida->calories}</p>";

}

?>

