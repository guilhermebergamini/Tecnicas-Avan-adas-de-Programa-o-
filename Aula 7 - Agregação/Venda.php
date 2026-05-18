<?php

require_once 'Vendedor.php';
require_once 'Comprador.php';
require_once 'Produto.php';

class Venda
{
    private $comp;
    private $vend;
    private $vetProd = array();
    private $valorTotal = 0.0;

    public function __construct(Comprador $comp, Vendedor $vend)
    {
        $this->comp = $comp;
        $this->vend = $vend;
    }

    public function venderProduto(Produto $produto)
    {
        $preco = $produto->getPreco();

        if (!$this->comp->gastarVerba($preco)) {
            echo "Venda nao realizada: verba insuficiente para comprar '{$produto->getNome()}'." . PHP_EOL;
            return;
        }

        $comissao = $this->vend->calcularComissao($preco);
        $this->vetProd[] = $produto;
        $this->valorTotal += $preco;

        echo "Venda realizada: '{$produto->getNome()}' por R$ " . number_format($preco, 2, ',', '.') . " - comiss�o do vendedor R$ " . number_format($comissao, 2, ',', '.') . PHP_EOL;
    }

    public function MostrarAtributos()
    {
        echo PHP_EOL . "=== Dados da Venda ===" . PHP_EOL;
        echo "Total da venda: R$ " . number_format($this->valorTotal, 2, ',', '.') . PHP_EOL;
        echo "Produtos vendidos:" . PHP_EOL;

        foreach ($this->vetProd as $produto) {
            $produto->MostrarAtributos();
        }

        $this->vend->MostrarAtributos();
        $this->comp->MostrarAtributos();
    }
}
