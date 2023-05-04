<?php
// Para mandar a llamar una clase Ubicada en otro archivo.
require_once "Clase_2.php";

$persona1 = new Humano('Reyes',23);
echo $persona1->Saludar('Hola soy ');

echo '<br><br>';

$persona2 = new Humano('Caal',25);
echo $persona2->Saludar('Mi nombre es ');