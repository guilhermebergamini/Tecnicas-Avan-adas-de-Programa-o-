<?php
require_once "funcionario.php";
require_once "comissionado.php";
require_once "concursado.php";
require_once "departamento.php";


$dep = new Departamento(1, "TI");

$f1 = new concursado(101, "Ana", 3000, 2024);
$f2 = new comissionado(102, "Carlos", 2500, 20);

$dep->admitirFuncionario($f1);
$dep->admitirFuncionario($f2);

$dep->listarDadosFuncionarios();

echo "Folha total: R$ " . $dep->calcularFolhaPagamento() . "<br>";

$dep->demitirFuncionario(101);

echo "Após demissão:<br>";
$dep->listarDadosFuncionarios();

echo "Nova folha total: R$ " . $dep->calcularFolhaPagamento();


?>