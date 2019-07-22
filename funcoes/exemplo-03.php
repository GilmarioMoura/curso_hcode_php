<?php 

function ola($texto, $periodo = "bom dia"){

	return ("Olá $texto! $periodo! <br>");
}

echo ola("Mundo", "Bom dia");
echo ola("", "boa noite");
echo ola("Glaucio", "boa tarde");
echo ola("João");

 ?>