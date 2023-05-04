<?php

class Transporte{
    protected int $ruedas;
    protected int $capacidad;
    public function __construct(int $ruedas, int $capacidad)
    {
        $this->ruedas=$ruedas;
        $this->capacidad =$capacidad;
    }
    public function getInfo(): string {
        return 'El transporte tiene '.$this->ruedas.' ruedas y una capacidad de '. $this->capacidad .' personas';
    }

    public function getRuedas():int{
        return $this->ruedas;
    }
}

class Bicicleta extends Transporte {

    public function getInfo() : string{
        return 'El transporte tiene '.$this->ruedas.' ruedas y una capacidad de '.$this->capacidad.' personas y NO GASTA GASOLINA'.'<br>';
    }
}

class Automovil extends Transporte {

    protected string $transmision;
    public function __construct(int $ruedas, int $capacidad, string $transmision)
    {
        $this->ruedas=$ruedas;
        $this->capacidad=$capacidad;
        $this->transmision=$transmision;
    }
    public function getTransmision() : string {
        return $this->transmision;
    }
}
//INSTANIA DEL PRIMER OBJETO
$bicicleta = new Bicicleta(2,1);
//EJECUCION DEL METODO HEREDADO DE TRASPORTE
echo $bicicleta->getInfo();
echo $bicicleta->getRuedas();

echo '<hr>';

//INSTANCIA DEL SEGUNDO OBJETO, CON EL ATRIBUTO ADICIONAL
$auto=new Automovil(4,4, ' Manual');
//METODO HEREDADO DEL TRANSPORTE
echo $auto->getInfo(0);
//METODO DE LA CLASE AUTOMOVIL
echo $auto->getTransmision();