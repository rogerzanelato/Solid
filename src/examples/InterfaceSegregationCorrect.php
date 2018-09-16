<?php

interface Passaro
{
    public function anda();
}

interface PassaroQueVoa extends Passaro
{
    public function voa();
}

interface PassaroQueNada extends Passaro
{
    public function nada();
}

class Andorinha implements PassaroQueVoa
{
    public function voa()
    {
        echo "Estou voando..";
    }

    public function anda()
    {
        echo "Estou andando..";
    }
}

class Pinguim implements PassaroQueNada
{
    public function nada()
    {
        echo "Estou nadando..";
    }

    public function anda()
    {
        echo "Estou andando..";
    } 
}