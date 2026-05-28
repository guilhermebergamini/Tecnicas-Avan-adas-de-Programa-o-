<?php

abstract class Funcionario{

    protected $codigo;
    protected $nome;
    protected $salario;

    public function mostrarDados(){
        echo "Código: ".$this->codigo." Nome:".$this->nome. " Salario: ".$this->salario;
    }

    public function __construct($codigo, $nome, $salario)
    {
        $this->codigo = $codigo;
        $this->nome = $nome;
        $this->salario = $salario;
    }

    abstract public function calcularSalario($diasUteis);
}


?>