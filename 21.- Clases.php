<?php

class NombreClase{
    // Atributos
    public $atributo1;
    private $atributo2;
    protected $atributo3;

    // Public: puede ser accedido desde fuera de la clase, dentro de la misma y puede ser heredada
    // Privado: Solo puede ser accedida dentro de la misma clase
    // Protected: Puede ser accedida dentro de la clas y puede ser heredada

    // Constructor
    public function __construct($param1, $param2){
        $this->atributo1 = $param1;
        $this->atributo2 = $param2;
    }

    // Metodos
    public function NombreMetodo(){
        echo "<br> Hola desde un metodo de la clase <br>";
    }   
}

// Instanciar la clase
$nombreClase = new NombreClase("Hola", "Mundo");

// Llamar a un metodo de la clase
$nombreClase->NombreMetodo();

echo $nombreClase->atributo1;
