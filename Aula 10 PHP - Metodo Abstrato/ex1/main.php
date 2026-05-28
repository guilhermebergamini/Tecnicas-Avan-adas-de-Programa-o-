<?php

require_once "funcionario.php";
require_once "concursado.php";
require_once "comissionado.php";

$c1 = new Concursado(1,"João",3000,101);

$c2 = new Comissionado(2,"Maria",3000,20);

echo "<h3>Concursado</h3>";

$c1->mostrarDados();

echo " Salário Final: "
     . $c1->calcularSalario(22);

echo "<hr>";

echo "<h3>Comissionado</h3>";

$c2->mostrarDados();

echo " Salário Final: "
     . $c2->calcularSalario(22);


?>