<?php 

interface Veiculo{

	public function acelerar($velocidade);
	public function frenar($velocidade);
	public function trocarMarcha($marcha);

}

abstract class Automovel implements Veiculo{

	public function acelerar($velocidade){

		echo "O veículo acelerou até " . $velocidade . " Km/h</br>";
	}

	public function frenar($velocidade){

		echo "O veículo frenou até " . $velocidade . "Km/h</br>";
	}

	public function trocarMarcha($marcha){

		echo "O veículo engatou a marcha $marcha.";
	}
}

class DelRey extends Automovel {

	public function empurrar(){


	}
}

//$carro = new Automovel();   //Classe abstrata nunca pode ser abstrata

$carro = new DelRey();

$carro->acelerar(200);

 ?>