<?php

class Veiculo
{
    private $placa;
    private $marca;
    private $modelo;

    public function __construct($placa, $marca, $modelo)
    {
        $this->placa = $placa;
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    public function veiculoInfo() {
        return "$this->marca $this->modelo";
    }

    public function getPlaca() {
        return $this->placa;
    }

    public function getMarca() {
        return $this->marca;
    }

    public function getModelo() {
        return $this->modelo;
    }
}

