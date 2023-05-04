<?php

// // DEFINIR una CLASE METODO y ATRIBUTO [EJEMPLO]
// class Humano {

//     public string $nombre='Reyes';
//     public int $edad=23;

//     public function Saludar(){
//         return 'Hola soy '.$this->nombre;
//     }

//     public function Edad(){
//         return $this->nombre.' tiene una edad de '.$this->edad;
//     }
// }
?>




<?php
// //Como se INSTANCIA una Clase [EJEMPLO].
// class Humano {

//     public string $nombre='Reyes';
//     public int $edad=23;

//     public function Saludar(){
//         return 'Hola soy '.$this->nombre;
//     }

//     public function Edad(){
//         return $this->nombre.' tiene una edad de '.$this->edad;
//     }
// }

// $persona1 = new Humano();
// echo $persona->edad();
?>




<?php
//METODO CONSTRUCTOR y como se EJECUTA.
//NOTA: si uno no define una varible en public, en automatico sera el dato null.
// class Humano {

//     public  $nombre;
//     public  $edad;

//     public function __construct($nombre,$edad){
//         $this->nombre=$nombre;
//         $this->edad=$edad;
//     }

//     public function Saludar($texto){
//         return $texto.$this->nombre;
//     }

//     public function Edad(){
//         return $this->nombre.' tiene una edad de '.$this->edad;
//     }
// }

//// PARA TENER UNA SINTAXIS MAS CORTA

class Humano{
    public function __construct(protected string $nombre, public int $edad){
    }

    public function Saludar($texto='Hola soy '){
        return $texto.$this->nombre;
    }

    public function Edad(){
        return $this->nombre.' tiene una edad de '.$this->edad;
    }
}


////Para Que otra Clase tenga Herencia de otra

class Militar extends Humano {
    public function Militar(){

            if($this->edad>=25){
                $texto=$this->nombre.' Podra se Militar';
            }else {
                $texto=$this->nombre.' No podra ser Militar';
            }
            return $texto;
    }
}




$persona1 = new Humano(edad:23,nombre:'Reyes');
echo $persona1->Edad('Hola soy ');

echo '<br><br>';

$persona2 = new Humano('Caal',25);
echo $persona2->Edad('Mi nombre es ');

echo '<br><br>';

$persona3 = new Militar(nombre:'Soto',edad:25);
echo $persona3->Edad('Mi nombre es ');
echo '<br>';
echo $persona3->Militar();
?>




<?php
//Como colocarle nombres a los parametros.
// Para mandar a llamar una clase Ubicada en otro archivo.
// require_once "Clase_2.php";

// $persona1 = new Humano(edad:23,nombre:'Reyes');
// echo $persona1->Edad('Hola soy ');

// echo '<br><br>';

// $persona2 = new Humano('Caal',25);
// echo $persona2->Edad('Mi nombre es ');

// echo '<br><br>';
?>