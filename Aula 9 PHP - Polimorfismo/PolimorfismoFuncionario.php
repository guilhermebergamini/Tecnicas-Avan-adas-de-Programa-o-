<?php

require_once 'Funcionario.php';
require_once 'Gerente.php';
require_once 'Secretario.php';
require_once 'Diretor.php';

$gerente = new Gerente('3', 'Carlos', 5000);
$secretario = new Secretario('2', 'Ana', 2500);
$diretor = new Diretor('1', 'Roberto', 10000);

print $gerente->MostrarAtributos() . '<br>';
print "--Salário atual: {$gerente->getSalario()} <br><br>";

print $secretario->MostrarAtributos() . '<br>';
print "--Salário atual: {$secretario->getSalario()} <br><br>";

print $diretor->MostrarAtributos() . '<br>';
print "--Salário atual: {$diretor->getSalario()} <br><br>";

?>