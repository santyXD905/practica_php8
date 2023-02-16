<?php

//interface, son plantillas para guiar los metodos de las clases

interface a {
    function prueba1();
}

interface b {
    function prueba2();
}

interface c extends a,b {
    function prueba3();
}

class d implements c {


	/**
	 * @return mixed
	 */
	public function prueba3() {
	}
	
	/**
	 * @return mixed
	 */
	public function prueba1() {
	}
	
	/**
	 * @return mixed
	 */
	public function prueba2() {
	}
}