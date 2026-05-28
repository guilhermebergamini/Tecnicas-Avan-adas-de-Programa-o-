<?php

class Comissionado extends Funcionario {

    public function __construct($codigo, $nome, $salario, $porcentagem)
    {

    parent::__construct($codigo, $nome , $salario);
    
    $this->porcentagem = $porcentagem;
    }

    public function calcularSalario($diasUteis)
    {
        return ($this->salario / 30) * $diasUteis * ($this->porcentagem / 100) + $this->salario; 
    }
}

?>