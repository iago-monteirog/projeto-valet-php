<?php

class Ticket 
{
    private static $id = 0;
    private $veiculo;
    private $entrada;
    private $saida;
    private $preco;

    public function __construct()
    {
        $this->veiculo = $veiculo;
        $this->entrada = new DateTime();
        self::$id++; 
    }

    public function getId()
    {
        return self::$id;
    }

    public function getVeiculo()
    {
        return $this->veiculo;
    }

    public function getEntrada()
    {
        return $this->entrada;
    }

    public function getSaida()
    {
        return $this->saida;
    }

    public function getPreco()
    {
        return $this->preco;
    }

    public function registrarSaida()
    {
        $this->saida = new DateTime();
        $diff = $this->entrada->diff($this->saida);
        $this->preco= $this->calculaPreco($diff);
    }

    private function calculaPreco($diff)
    {
        return $diff->h * 3;
    }
}