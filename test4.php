<?php

//traits, herencia multiple en php

Class Persona{ //si quisieramos que no se pueda heredar podriamos usar "final"
    private $nombre;

    public function __construct($nombre){
        $this->nombre = $nombre;
    }

    public function getNombre(){
        return $this->nombre;
    }

    public function setNombre($nombre){
        $this->nombre = $nombre;
    }

     public function saludo(){ //si quisieramos que no se pueda sobreescribir podriamos usar "final"
        echo "hola mundo"; 
    }
}

trait Latino {
    function saludo(){ //este metodo sobrescribe al de la herencia
        echo "hola soy german";
    }

    protected function despedida(){
        echo "adios ";
    }
}

trait Europeo {
    function saludo(){
        echo "Hi i am german";
    }

    //se pueden poner clases abstractas en los traits
    abstract public function hola();


}

trait Fusion { //funcionar traits
    use Latino,Europeo{
        Latino::saludo insteadOf Europeo; //esto indica que quiero usar el metodo saludo del trait Latino en lugar del Europeo
        Latino::despedida as public;
    }

    public function hola(){ //combinar metodosde traits
        echo $this->saludo()." ". $this->despedida()."\n"; 
    }
}


class Argentino extends Persona {
    use Fusion;

    function saludo(){ //este metodo sobrescribe al del trait o la herencia
        echo "aguante boquita "; 
    }
}

$leonel = new Argentino("leonel",8474);

//echo $leonel->saludo()."\n";
//echo $leonel->despedida()."\n";
echo $leonel->hola(); //como se observa usa el metodo que corresponde de la clase segun la prioridad 
