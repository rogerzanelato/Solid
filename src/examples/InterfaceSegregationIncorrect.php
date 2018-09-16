<?php

interface Passaro
{
    public function voa();
    public function nada();
    public function anda();
}

class Andorinha implements Passaro
{
    public function voa()
    {
        echo "Estou voando..";
    }

    public function nada()
    {
        throw new \Exception('Esse método não pode ser executado..');
    }

    public function anda()
    {
        echo "Estou andando..";
    }
}

class Pinguim implements Passaro
{
    public function voa()
    {
        throw new \Exception('Esse método não pode ser executado..');
    }

    public function nada()
    {
        echo "Estou nadando..";
    }

    public function anda()
    {
        echo "Estou andando..";
    } 
}