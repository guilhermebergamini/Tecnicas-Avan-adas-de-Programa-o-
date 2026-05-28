<?php

class concursado extends Funcionario {

    private $numeroEdital;
    public function __construct($codigo, $nome, $salario, $numeroEdital)
    {
    
    parent::__construct($codigo, $nome , $salario);
    
    $this->numeroEdital = $numeroEdital;
    }

    public function calcularSalario($diasUteis)
    {
        return ($this->salario / 30) * $diasUteis;
    }
    
}


?>