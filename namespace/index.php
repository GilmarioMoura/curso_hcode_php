<?php 

require_once("config.php");

use Cliente\Cadastro;

$cad = new cadastro();

$cad->setNome("Gilmário Henrique");
$cad->setEmail("gilmariohm@gmail.com");
$cad->setSenha("123456");

//echo $cad;   //Por conta do método __toString o echo consegue mostrar o array

$cad->registrarVenda();



 ?>