<?php

class Vendedor
{
    private $comissaoTotal = 0.0;

    public function calcularComissao($valorVenda)
    {
        $valorComissao = $valorVenda * 0.02;
        $this->comissaoTotal += $valorComissao;
        return $valorComissao;
    }

    public function getComissaoTotal()
    {
        return $this->comissaoTotal;
    }

    public function MostrarAtributos()
    {
        echo "Vendedor: comissao total acumulada R$ " . number_format($this->comissaoTotal, 2, ',', '.') . PHP_EOL;
    }
}
