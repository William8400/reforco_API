<?php

$url = "http://localhost/reforco_API/bandas/bandas_API.php?banda=Mamonas_Assassinas";

$resposta = file_get_contents($url);

$Mamonas_Assassinas = json_decode($resposta, true);

echo "<h1> Mamonas Assassinas </h1>";
echo "<p><b> Origem: </b> ".$Mamonas_Assassinas['origem']."</p>";
echo "<p><b> Genero:</b> ".$Mamonas_Assassinas['genero'][0]."</p>";
echo "<p><b> Ano Formação:</b> ".$Mamonas_Assassinas['ano_formacao']."</p>";
echo "<p><b> Ano Termino:</b> ".$Mamonas_Assassinas['ano_termino']."</p>";
echo "<p><b> Descrição:</b> ".$Mamonas_Assassinas['descricao']."</p>";

