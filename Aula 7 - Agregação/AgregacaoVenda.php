<?php

require_once 'Venda.php';

$comprador = new Comprador(1600.00);
$vendedor = new Vendedor();

$produto1 = new Produto(1001, 'Smartphone', 1200.00);
$produto2 = new Produto(1002, 'Fone de ouvido', 320.50);
$produto3 = new Produto(1003, 'Capinha protetora', 49.90);

$venda = new Venda($comprador, $vendedor);

$venda->venderProduto($produto1);
$venda->venderProduto($produto2);
$venda->venderProduto($produto3);

$venda->MostrarAtributos();
