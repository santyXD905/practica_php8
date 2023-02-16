<?php

//clases abstractas, son como interfaces pero con más funcionalidades

abstract class ClaseAbstracta{

    abstract protected function getValor();
    abstract public function valorPrefijo($valor);

    public function imprimir(){
        echo "metodo heredado \n";
    }
 

}

class ClaseConcreta extends ClaseAbstracta{

	/**
	 * @return mixed
	 */
	protected function getValor() {
        return "Clase concreta";
	}
	
	/**
	 *
	 * @param mixed $valor
	 * @return mixed
	 */
	public function valorPrefijo($valor) {
        //logica del metodo
        echo "el valor es " . $valor;
	}



}

$instancia = new ClaseConcreta;

$instancia->imprimir();
$instancia->valorPrefijo("santy");