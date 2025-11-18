<?php

$url = "http://localhost/reforco_API/bandas/bandas_API.php?banda=Queen";

$resposta = file_get_contents($url);

$banda = json_decode($resposta, true);

echo "<p><b> Nome da Banda: </b>".$banda['nome']."</p>";

echo "<p><b> Origem: </b> ".$banda['origem']."</p>";

echo "<p><b> Genero:</b> ".$banda['genero'][0]."</p>";

echo "<p><b> Ano Formação:</b> ".$banda['ano_formacao']."</p>";

echo "<p><b> Descrição:</b> ".$banda['descricao']."</p>";

