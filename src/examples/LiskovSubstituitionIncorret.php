<?php

class Retangulo
{
    protected $altura;
    protected $largura;

    public function getAltura()
    {
        return $this->altura;
    }

    public function setAltura($altura)
    {
        $this->altura = $altura;
    }

    public function getLargura()
    {
        return $this->largura;
    }

    public function setLargura($largura)
    {
        $this->largura = $largura;
    }

    public function getArea()
    {
        return $this->largura * $this->altura;
    }
}

class Quadrado extends Retangulo
{
    /**
     * Adaptamos os métodos numa tentativa de adaptar o quadrado com a classe retangulo. Pois qualquer medida atribuída a um lado
     * representará a medida dos outros 3
     */
    public function setAltura($altura)
    {
        $this->altura = $altura;
        $this->largura = $altura;
    }

    public function setLargura($largura)
    {
        $this->altura = $largura;
        $this->largura = $largura;
    }
}

class Cliente
{
    public function verificaArea(Retangulo $ret)
    {
        $ret->setLargura(4);
        $ret->setAltura(5);

        $area = $ret->getArea();
        if ( $area != 20 ){
            throw new \Exception("Área errada - $area!");
        }

        return true;
    }
}

$cliente = new Cliente;
// O valor muda da área muda de acordo com a classe passada 
$cliente->verificaArea(new Retangulo);
$cliente->verificaArea(new Quadrado);