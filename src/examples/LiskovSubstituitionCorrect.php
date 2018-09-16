<?php

use Prophecy\Doubler\CachedDoubler;

abstract class Veiculo
{
    abstract protected function ligarMotor();
    
    public function acelerar() {
        echo "Acelerando.. ";
    }
}

class Carro extends Veiculo
{
    public function ligarMotor()
    {
        $this->injetarGasolina();
        echo "Ligando motor do Carro.. ";
    }

    private function injetarGasolina()
    {
        // Pocedimento de ignição
        echo "Injetando gasolina.. ";
    }
}

class Metro extends Veiculo
{
    public function ligarMotor()
    {
        $this->alcancarVoltagem();
        echo "Ligando motor do Metro.. ";
    }

    private function alcancarVoltagem() {
        // Lógica elétrica
        echo "Alcancando voltagem.. ";
    }
}

class Motorista
{
    private $veiculo;

    public function getVeiculo(){
        return $this->veiculo;
    }

    public function setVeiculo($veiculo){
        $this->veiculo = $veiculo;
    }

    public function __construct(Veiculo $veiculo)
    {
        $this->veiculo = $veiculo;
    }

    public function dirigir()
    {
        $this->veiculo->ligarMotor();
        $this->veiculo->acelerar();
    }
}

$motorista = new Motorista(new Carro);
$motorista->dirigir();

echo "\n";
$motorista->setVeiculo(new Metro);
$motorista->dirigir();