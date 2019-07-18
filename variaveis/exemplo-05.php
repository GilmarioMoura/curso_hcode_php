<?php 

$nome = "Glaucio";

$ip = $_SERVER["SCRIPT_NAME"];

function teste(){

	global $nome;
	echo $nome;
	echo "</br>";
	echo $ip;
}

function teste2(){
	$nome = "João";
	echo $nome . " agora no teste2";

}

teste();
echo "</br>";
teste2();

 ?>