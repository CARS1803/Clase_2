<?php

// DEFINIR una CLASE METODO y ATRIBUTO [EJEMPLO]
class Persona {

    public string $nombre='Reyes';
    public int $edad=23;

    public function Saludar(){
        return 'Hola soy '.$this->nombre;
    }

    public function Edad(){
        return $this->nombre.' tiene una edad de '.$this->edad;
    }
}
?>