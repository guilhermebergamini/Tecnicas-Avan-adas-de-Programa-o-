<?php

class Comprador
{
    private $verba;

    public function __construct($verba)
    {
        $this->verba = $verba;
    }

    public function getVerba()
    {
        return $this->verba;
    }

    public function gastarVerba($valor)
    {
        if ($valor > $this->verba) {
            return false;
        }

        $this->verba -= $valor;
        return true;
    }

    public function MostrarAtributos()
    {
        echo "Comprador: verba restante R$ " . number_format($this->verba, 2, ',', '.') . PHP_EOL;
    }
}
